<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        // $friends = DB::table('users')
        //             ->leftJoin('friends', 'users.id', '=', 'friends.id_userTo')
        //             ->select('users.id','users.name')->where('users.id','!=',Auth::user()->id)
        //             ->;
        $friends = User::leftJoin('friends', 'users.id', '=', 'friends.id_userTo')
                        ->where('users.id','!=',Auth::user()->id)
                        ->get();
        // echo '<pre>';
        // print_r($friends);
       
        // echo '</pre>';
        return view('PagesUser.home')->with('friends',$friends);
        // SELECT users.name
        // FROM users
        // INNER JOIN friends ON friends.id_userTo=users.id WHERE users.id != 1;
    }
    public function profile($user_id)   
    {
        $user = User::find($user_id);
        return view('PagesUser.profile')->with('user',$user);
    }
}
