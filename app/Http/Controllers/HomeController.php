<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use App\Models\Comments;
use App\Models\Messenger;
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
        $friend = DB::table('users')->where('id','!=',Auth::user()->id)->get();
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
        // dd($friendposts);
        return view('PagesUser.home')->with('friends',$friend)->with('friendposts',$friendposts)->with('userposts',$userposts);
        //SELECT users.name ,friends.id_userFrom,friends.id_userTo FROM `users` INNER JOIN friends ON friends.id_userFrom = users.id OR friends.id_userTo = users.id  WHERE friends.id_userFrom = '2' OR friends.id_userTo = '2' AND users.id != '2' AND friends.status = 'Accepted';
    }
    public function profile($user_id)   
    {
        $user = User::find($user_id);
        return view('PagesUser.profile')->with('user',$user);
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
        return view('PagesUser.search-user')->with('users',$reuslt_user);
        // dd(count($reuslt_user));
    }
    public function messenger()
    {
        $count_friend =  Friend::where('status' ,'Accepted')->where('id_userTo',Auth::user()->id)->orWhere('id_userFrom',Auth::user()->id)->count();
        $friends = DB::table('users')->where('id','!=',Auth::user()->id)->orderBy('created_at','desc')->get();
        // $friends = DB::table('users')->where('id','!=',Auth::user()->id)
        //                             ->join('messengers','users.id ' ,'=' , 'messengers.id_userFrom')->where('is_read ',0)
        //                             ->where('messengers.id_userTo',Auth::user()->id)
        //                             ->orderBy('created_at','desc')->get();
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
    // public function getMessages(Request $request)
    // {
    //     $receiver_id = $request->receiver_id;
    //     $my_id = Auth::user()->id;
    //     Messenger::where('id_userFrom', $receiver_id)->where('id_userTo',$my_id)->update(['is_read'=> 1]);
    //     $info_friend = User::Where('id',$receiver_id)->first();
    //     $messages = Messenger::where(function ($query) use ( $receiver_id, $my_id) {
    //         $query->where('id_userFrom',  $receiver_id)->where('id_userTo', $my_id);
    //     })->orWhere(function ($query) use ( $receiver_id, $my_id) {
    //         $query->where('id_userFrom', $my_id)->where('id_userTo',  $receiver_id);
    //     })->get();
    //     $conversition ='';
    //     foreach($messages as $key =>$value)
    //     {
    //         if($value->id_userFrom == $my_id)
    //         {
    //             $conversition .= ' <div class="relative flex justify-start items-center py-4 self-end mr-4">
    //                                     <div class="absolute -top-1 right-14 text-sm text-gray-700">You</div>
    //                                     <div class="mr-4 rounded-xl rounded-br-none p-2 max-w-sm bg-blue-500 text-white">
    //                                         <span class="text-base font-normal">
    //                                             '.$value->message.'
    //                                         </span>
    //                                         <span class="text-xs text-white block">'.date_format($value->created_at,"H:i").'</span>
    //                                     </div>
    //                                     <img src="/image/'.Auth::user()->avatar.'" alt="" class="w-10 h-10 rounded-full object-cover">
    //                                 </div>';
    //         }
    //         else {
    //             $conversition .= '  <div class="relative flex justify-start items-center py-4 ">
    //                                 <div class="absolute -top-1 left-14 text-sm text-gray-700">'. $info_friend->name.'</div>
    //                                 <img src="/image/'. $info_friend->avatar.'" alt="" class="w-10 h-10 rounded-full object-cover">
    //                                 <div class="ml-4 bg-gray-200 rounded-xl rounded-bl-none p-2 max-w-sm">
    //                                     <span class="text-base font-normal">
    //                                     '.$value->message.'
    //                                     </span>
    //                                     <span class="text-xs text-gray-700 block">'.date_format($value->created_at,"H:i").'</span>
    //                                 </div>
                                    
    //                             </div>';
    //         }
            
    //     }
    //     $info_conversiton = ' <div class="w-full flex justify-center" >
    //                             <div class="lg:w-8/12  mr-4 w-full">
    //                                 <div class="header-conver flex justify-between items-center py-4 border-b border-gray-700">
    //                                     <div class="info-friend relative flex justify-between items-center">
    //                                         <img src="/image/'. $info_friend->avatar.'" alt="" class="w-10 h-10 rounded-full object-cover">
    //                                         <div class="ml-3 text-lg text-gray-700 ">'. $info_friend->name.'</div>
    //                                     </div>
    //                                     <div class="action-friends flex justify-between items-center mr-4">
    //                                         <div class="text-xl hidden xl:grid place-items-center bg-gray-200
    //                                         dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
    //                                             <i class="bx bx-dots-horizontal-rounded"></i>
    //                                         </div>
    //                                         <div class="text-xl hidden xl:grid place-items-center bg-gray-200
    //                                         dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
    //                                             <i class="bx bx-camera-movie"></i>
    //                                         </div>
    //                                         <div class="text-xl hidden xl:grid place-items-center bg-gray-200
    //                                         dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
    //                                             <i class="bx bxs-edit"></i>
    //                                         </div>
    //                                     </div>
    //                                 </div>
    //                                 <div class="h-4/5 max-h-4/5   overflow-y-auto">
    //                                     <!-- Chat -->
    //                                     <div class="conversition flex flex-col pt-2 transition-all" id="box_chats" >
    //                                         '.$conversition.'
    //                                     </div>
    //                                 </div>
    //                                 <div class="form-send flex justify-between items-center border-t border-gray-500 py-2 ">
    //                                     <div>
    //                                         <ul class="hidden md:block">
    //                                             <li class="inline-block  ">
    //                                                 <span class="grid place-items-center text-3xl text-green-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnImagePost">
    //                                                     <i class="bx bx-images"></i>
    //                                                 </span>
    //                                             </li>
    //                                             <li class="inline-block  ">
    //                                                 <span class="grid place-items-center text-3xl text-yellow-500 hover:bg-gray-300 w-10 h-10 rounded-full" id="btnVideoPost" >
    //                                                     <i class="bx bxs-videos"></i>
    //                                                 </span>
    //                                             </li>
    //                                             <li class="inline-block  ">
    //                                                 <span class="grid place-items-center text-3xl text-blue-500 hover:bg-gray-300 w-10 h-10 rounded-full">
    //                                                     <i class="bx bx-smile" ></i>
    //                                                 </span>
    //                                             </li>
    //                                             <li class="inline-block  ">
    //                                                 <span class="grid place-items-center text-3xl text-purple-500 hover:bg-gray-300 w-10 h-10 rounded-full">
    //                                                     <i class="bx bxs-file-gif"></i>
    //                                                 </span>
    //                                             </li>
    //                                             <li class="inline-block  ">
    //                                                 <span class="grid place-items-center text-3xl text-red-500 hover:bg-gray-300 w-10 h-10 rounded-full">
    //                                                     <i class="bx bxs-microphone"></i>
    //                                                 </span>
    //                                             </li>
    //                                         </ul>
    //                                     </div>
    //                                     <div class=" flex-1 rounded-full p-2 bg-white text-gray-800 ">
    //                                         <form >
    //                                             <input type="text" onkeypress="sendMessage(event)" class="px-3 bg-transparent w-full outline-none text-base font-medium send_message" placeholder="Write a message">
    //                                         </form>
    //                                     </div>
    //                                     <div class="">
    //                                         <span class="grid place-items-center text-3xl  hover:bg-gray-300 w-10 h-10 rounded-full">
    //                                             <i class="bx bx-dots-horizontal-rounded" ></i>
    //                                         </span>
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                             <div class="w-4/12 hidden md:hidden lg:block bg-white shadow-md p-2 rounded-md">
    //                                 <div class="flex justify-center items-center flex-col mb-3">
    //                                     <div class="info">
    //                                         <img src="/image/'. $info_friend->avatar.'" alt="" class="w-20 h-20 rounded-t-lg object-cover">
    //                                     </div>
    //                                     <div class="mx-2">
    //                                         <span class="font-semibold text-lg text-center"> '. $info_friend->name.'</span>
    //                                     </div>
    //                                 </div>
    //                                 <div>
    //                                     <ul >
    //                                         <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
    //                                             <div>
    //                                                 <span class="font-medium text-base ">Customize chat</span>
    //                                             </div>
    //                                             <div>
    //                                                 <span> <i class="bx bx-chevron-right"></i></span>
    //                                             </div>
    //                                         </li>
    //                                         <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
    //                                             <div>
    //                                                 <span class="font-medium text-base ">Privacy and support</span>
    //                                             </div>
    //                                             <div>
    //                                                 <span> <i class="bx bx-chevron-right"></i></span>
    //                                             </div>
    //                                         </li>
    //                                         <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
    //                                             <div>
    //                                                 <span class="font-medium text-base "  > Shared file</span>
    //                                             </div>
    //                                             <div>
    //                                                 <span> <i class="bx bx-chevron-right"></i></span>
    //                                             </div>
    //                                         </li>
    //                                         <li class="flex justify-between items-center p-2 hover:bg-gray-200 cursor-pointer rounded-md">
    //                                             <div>
    //                                                 <span class="font-medium text-base ">  Shared media files</span>
    //                                             </div>
    //                                             <div>
    //                                                 <span> <i class="bx bx-chevron-right"></i></span>
    //                                             </div>
    //                                         </li>
    //                                     </ul>
    //                                 </div>
    //                             </div>
    //                         </div>';
    
    //     return  response()->json([
    //         'data' => $info_conversiton,
    //         'messages' =>$messages,
    //     ]);
    // }
    public function sendMessages(Request $request)
    {
        $data = array();
        $my_id = Auth::user()->id;
        $message = $request->message;
        $data['message'] = htmlspecialchars($message);
        $data['id_userTo']= $request->receiver_id;
        $data['id_userFrom']= $my_id;
        $reuslt_send = Messenger::create($data);
        // event(new Messenger('hello world'));
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
