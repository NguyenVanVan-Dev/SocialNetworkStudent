<?php 
use App\Http\Controllers\UsersController;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use App\Models\Messenger;
use App\Models\Comments;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
function getNotifiMes($id)
{
    $user = Messenger::where('id_userTo',Auth::user()->id)->where('id_userFrom',$id)->where('is_read',0)->count();
    return $user;
};
function getNumNotiMes()
{
   $num = Messenger::where('id_userTo',Auth::user()->id)->where('is_read',0)->count();
   return $num;
}
function statusFriend($fromID,$toID)
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
};
function getInfoUser($id)
{
    $user = User::where('id',$id)->first();
    return $user;
}
function checkRule($content)
{
    $rule = [
        'đánh','mắng','đâm','chém','giết','hành hạ','đấm'
    ];
    $check_rule = '';
    for ($i=0; $i < count($rule); $i++) { 
        if(strpos($content,$rule[$i]) !== false )
        {
            $check_rule = 'false';
        }
        else
        {
            $check_rule = 'true';
        }
    }
    return $check_rule;
}
 function countComment($id)
{
    $count_comment = Comments::where('post_id',$id)->count();
    return $count_comment;
}