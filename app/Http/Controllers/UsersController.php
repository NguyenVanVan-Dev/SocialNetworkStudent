<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function update(Request $request)
    {
        $data = array();
        $get_avatar = $request->file('avatar');
        $get_cover_avatar = $request->file('cover_avatar');
        if($get_avatar){
            $get_name_avatar = $get_avatar->getClientOriginalName(); 
            $name_avatar = current(explode('.',$get_name_avatar));
            // $new_avatar =  $name_avatar.rand(0,99).'.'.$get_avatar->getClientOriginalExtension();
            $new_avatar =  $name_avatar.rand(0,99).'.'. explode('.',$get_name_avatar)[1];
            $get_avatar->move(\public_path('image'),$new_avatar);
            $data['avatar'] = $new_avatar;
        }
        if($get_cover_avatar){
            $get_name_avatar_cover = $get_cover_avatar->getClientOriginalName(); 
            $name_avatar_cover = current(explode('.',$get_name_avatar_cover));
            $new_avatar_cover =  $name_avatar_cover.rand(0,99).'.'.$get_cover_avatar->getClientOriginalExtension();
            $get_cover_avatar->move(\public_path('image'),$new_avatar_cover);
            $data['cover_avatar'] = $new_avatar_cover;
        }
        $check_update = DB::table('users')->where('id',$request->id)->update($data);
        if ($check_update) {
            return response()->json([
                'success' =>'true',
                'title' => 'Edit Profile Notification',
                'cover_avatar' => !empty($data['cover_avatar']) ? 'true' : 'false',
                'avatar' => !empty($data['avatar']) ? 'true' : 'false',
            ]);
        }
        else{
            return response()->json([
                'success' =>'false',
                'title' => 'Edit Profile Notification',
            ]);
        }
        
    }
}
