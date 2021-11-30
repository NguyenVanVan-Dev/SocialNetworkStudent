<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use App\Models\Comments;
use App\Models\Messenger;
use App\Models\Story;
use Pusher\Pusher;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $friend = DB::table('users')->where('id','!=',Auth::user()->id)->orderby('created_at','desc')->get();
                // ->join('friends',function($join)
                // {
                //     $join->on('friends.id_userFrom', 'users.id');
                //     $join->orOn('friends.id_userTo','users.id');
                // })
                // ->where('users.id','!=',Auth::user()->id)
                // ->where('friends.status','Accepted')
                // ->where('friends.id_userFrom',Auth::user()->id)
                // ->orWhere('friends.id_userTo',Auth::user()->id)
                // ->orderby('friends.id','desc')->get();
                // dd($friend);
        $friendposts = DB::table('posts')->where('user_id','!=',Auth::user()->id)->orderby('created_at','desc')->get(); 
        $userposts = DB::table('posts')->where('user_id',Auth::user()->id)->orderby('created_at','desc')->get(); 
        $stories = DB::table('stories')->orderby('created_at','desc')->limit(4)->get();
        return view('PagesUser.home')
                ->with('friends',$friend)
                ->with('friendposts',$friendposts)
                ->with('userposts',$userposts)
                ->with('stories',$stories);
        //SELECT users.name ,friends.id_userFrom,friends.id_userTo FROM `users` INNER JOIN friends ON friends.id_userFrom = users.id OR friends.id_userTo = users.id  WHERE friends.id_userFrom = '2' OR friends.id_userTo = '2' AND users.id != '2' AND friends.status = 'Accepted';
    }
    public function profile($user_id)   
    {
        $user = User::find($user_id);
        $posts = Post::where('user_id',$user_id)->orderBy('created_at','desc')->get();
        return view('PagesUser.profile')->with('user',$user)->with('posts',$posts);
    }
    public function viewUser($id)
    {
        $user = User::find($id);
        $posts = Post::where('user_id',$id)->orderBy('created_at','desc')->get();
        // dd($post);
        return view('PagesUser.view-user')->with('user',$user)->with('posts',$posts);
    }
    public function search(Request $request){
        $text_search = $request->querytext;
        $hostname = $_SERVER['HTTP_HOST'];
        $output = '<ul class="flex flex-col w-full items-center justify-center text-gray-600" >';
        // $reuslt_search =  User::where('product_name','like','%'.$text_search.'%')->orWhere('product_price','like',$text_search)->get();
        $reuslt_search =  User::where('name','like','%'.$text_search.'%')->where('id','!=',Auth::user()->id)->limit(10)->get();
        if($reuslt_search->count() > 0){

            foreach ($reuslt_search as $key => $value) {
                $output .= '<li class=" w-full text-center p-1 border-b-2 border-gray-200 dark:hover:bg-dark-third items-center dark:text-dark-txt">
                                <a href="/view-user/'.$value->id.'" class="flex items-center space-x-2 p-2 rounded-md hover:bg-white">
                                    <img src="/image/'.$value->avatar.'" alt="" class="w-10 h-10 rounded-full">
                                    <span class="font-semibold block">'.$value->name.'</span>
                                </a>
                            </li>';
            }
        }else{
            $output .= '<li class=" w-full text-center p-1 border-b-2 border-gray-200 dark:hover:bg-dark-third items-center dark:text-dark-txt">
                            <a href="#" class="flex items-center space-x-2 p-2 rounded-md hover:bg-white">
                                <span class="font-semibold block">No Reulst Found </span>
                            </a>
                        </li>';
        };
        $output .= '</ul>';
        return response()->json([
            'data' =>$output,
        ]);
    }
    public function search_user(Request $request)
    {
        $text_search = $request->search_user;
        $reuslt_user =  User::where('name','like','%'.$text_search.'%')->where('id','!=',Auth::user()->id)->get();
        if(count($reuslt_user) == 0){
            Session::put('message',$text_search);
        }else
        {
            Session::forget('message');
        }
        $stories = DB::table('stories')->orderby('created_at','desc')->limit(4)->get();
        return view('PagesUser.search-user')
                ->with('users',$reuslt_user)
                ->with('stories',$stories);
        // dd(count($reuslt_user));
    }
    public function messenger()
    {
        $count_friend =  Friend::where('status' ,'Accepted')->where('id_userTo',Auth::user()->id)->orWhere('id_userFrom',Auth::user()->id)->count();
        $friends = DB::table('users')->where('id','!=',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('PagesUser.messenger')->with('friends',$friends)->with('qtyfriend',$count_friend);
    }
    public function getMessages(Request $request){
        $receiver_id = $request->receiver_id;
        $my_id = Auth::user()->id;
        Messenger::where('id_userFrom', $receiver_id)->where('id_userTo',$my_id)->update(['is_read'=> 1]);
        $info_friend = User::Where('id',$receiver_id)->first();
        $messages = Messenger::where(function ($query) use ( $receiver_id, $my_id) {
            $query->where('id_userFrom',  $receiver_id)->where('id_userTo', $my_id);
        })->orWhere(function ($query) use ( $receiver_id, $my_id) {
            $query->where('id_userFrom', $my_id)->where('id_userTo',  $receiver_id);
        })->get();
        return view('Component.conversition')->with('info_friend', $info_friend)->with('messages', $messages);
    }
    
    public function sendMessages(Request $request)
    {
        $data = array();
        $my_id = Auth::user()->id;
        $message = $request->message;
        $message =   \Illuminate\Support\Facades\Crypt::encryptString($message);
        $data['message'] =$message;
        // $data['message'] = htmlspecialchars($message);
        $data['id_userTo']= $request->receiver_id;
        $data['id_userFrom']= $my_id;
        $reuslt_send = Messenger::create($data);
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['id_userFrom' =>  $my_id, 'id_userTo' => $request->receiver_id]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
        if($reuslt_send)
        {
           
            return response()->json([
                'status' => 'true',
                'data'=>  $reuslt_send
            ]);
        }else {
            return response()->json([
                'status' => 'false',
            ]);
        }
    }
}
