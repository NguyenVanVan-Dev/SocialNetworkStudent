<?php

namespace App\Http\Controllers;
use App\Models\VideoCall;
use App\Models\User;
use Illuminate\Http\Request;
use Pusher\Pusher;
class VideoCallController extends Controller
{
    //
    public function callVideo(Request $request)
    {
        $data = array();
        $data['id_userCalled'] = $request->friendID;
        $data['id_userCall'] = $request->userID;
        $data['status'] = 'Request Call';
        $user_call = User::where('user_id',$request->userID)->select('name', 'id','avatar')->first();
        if(!empty($data))
        {
          $result_request =  VideoCall::create($data);
        }
        if($result_request)
        {
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
            $data = ['info_call' =>  $result_request,'info_userCall'=> $user_call,'id_call' => $result_request->id];
            $pusher->trigger('my-channel', 'my-event', $data);
            return response()->json([
                'status' => 'true',
            ]);
        }
    }
    public function leaveVideo(Request $request)
    {
        $data = [];
        $data['status'] = 'Leave Call';
        $data['who_leave'] = $request->who_leave;
        $result_request =  VideoCall::where('id',$request->id_call)->update($data);
        $info_call =  VideoCall::where('id',$request->id_call)->first();
        if($result_request)
        { 
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
    
            // $data = ['id_userCall' =>$result_request->id_userCall, 'id_userCalled' => $result_request->id_userCalled,'id_call' => $result_request->id]; // sending from and to user id when pressed enter
            $data = ['info_call' =>  $info_call]; // sending from and to user id when pressed enter
            $pusher->trigger('my-channel', 'my-event', $data);
            return response()->json([
                'status' => 'true',
            ]);
        }
    }
}
