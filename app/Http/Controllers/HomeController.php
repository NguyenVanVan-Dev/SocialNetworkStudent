<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
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
    public function viewuser($id)
    {
        $user = User::find($id);
        return view('PagesUser.viewuser')->with('user',$user);
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
                                <a href="/viewuser/'.$value->id.'" class="flex items-center space-x-2 p-2 rounded-md hover:bg-white">
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
}
