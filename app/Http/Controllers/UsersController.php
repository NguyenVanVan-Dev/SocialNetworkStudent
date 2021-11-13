<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
        if($request->story)
        {
            $data['story'] = $request->story;
        }
        if($request->interests)
        {
            $data['interests'] = $request->interests;
        }
        $check_update = DB::table('users')->where('id',$request->id)->update($data);
        if ($check_update) {
            return response()->json([
                'success' =>'true',
                'title' => 'Edit Profile Notification',
                'cover_avatar' => !empty($data['cover_avatar']) ? 'true' : 'false',
                'avatar' => !empty($data['avatar']) ? 'true' : 'false',
                'story' => !empty($data['story']) ? $data['story'] : '',
                'interests' => !empty( $data['interests']) ?  $data['interests'] : '',
            ]);
        }
        else{
            return response()->json([
                'success' =>'false',
                'title' => 'Edit Profile Notification',
            ]);
        }
        
    }
    public function handleFriend(Request $request)
    {
        
        $from_id = Auth::user()->id;
        $action = $request->action;
        $data = array();
        if($action == 'send_request')
        {
            $to_id = $request->toID;
            $data['id_userFrom'] = $from_id;
            $data['id_userTo'] = $to_id;
            $data['status'] = 'Pending';
            $data['accepted'] = 'No';
            // DB::table('friends')->insert($data);
            Friend::insert($data);
        }
        elseif($action == 'count_notifi_send_friends')
        {
           $result_notifi =  Friend::where('id_userTo',Auth::user()->id)->where('status' ,'Pending')->where('accepted','No')->count();
           $result_friends =  Friend::where('id_userTo',Auth::user()->id)->where('status' ,'Pending')->where('accepted','No')->get();
           foreach($result_friends as $key => $value)
           {
              $list_friends_request = User::where('id',$value->id_userFrom)->get();
           }
           return response()->json([
            'quantity_notifi' => $result_notifi,
            'list_request' =>  $list_friends_request
            ]);
        }
        elseif($action == 'accepte_request')
        {
            $to_id = $request->toID;
            $data['status'] = 'Accepted';
            $result_request =  Friend::where('id_userFrom',$from_id)->where('id_userTo',$to_id)->orWhere('id_userFrom',$to_id)->where('id_userTo',$from_id)->update($data);
            if($result_request)
            {
                return response()->json([
                    'accepte' => 'true',
                ]);
            }
        }
       
    }
    //myself friend
    public static function statusFriend($fromID,$toID)
    {
        $output = '';
        $result_status = Friend::where('id_userFrom',$fromID)->where('id_userTo',$toID)->get();
        $check_request_forfriends = Friend::where('id_userFrom',$toID)->where('id_userTo',$fromID)->where('status','!=','Accepted')->get();
        $check_accepte_friends = Friend::where('id_userFrom',$toID)->where('id_userTo',$fromID)->orWhere('id_userTo',$toID)->where('id_userFrom',$fromID)->where('status','Accepted')->get();
        foreach($result_status as $key =>$value)
        {
            $output = $value->status;
        }        
        
        if($check_accepte_friends->count() == 1)
        {
            $output = 'Accepted';
        }
        if( $check_request_forfriends->count() == 1)
        {
            $output = 'RequestFriend';
        }

        return  $output;
    }
}
