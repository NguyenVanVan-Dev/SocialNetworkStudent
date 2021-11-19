<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Comments;
use App\Models\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $data = array();
        $data['content'] = $request->comment;
        $data['user_id'] = Auth::user()->id;
        $data['post_id'] = $request->post_id;
        // dd($data);
        if(!empty($request->comment))
        {
            $result = Comments::create($data);   
            
            if($result)
            {
                return response()->json([
                    'status' => 'true',
                    'data'=> $result
                ]);
            }else {
                return response()->json([
                    'status' => 'false',
                ]);
            }
        }else {
            return response()->json([
                'status' => 'false',
                'data'=>$data
            ]);
        }
    }
    public function getInfoUser($id){
        $data = User::where('id',$id)->first();
        return $data;
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $result = Comments::where("post_id",$id)->get();
        $result_html ='';
        foreach ($result as $key => $value) {
            $user = $this->getInfoUser($value->user_id);
            $result_html .= '<div class="flex space-x-2 "><img src="image/'. $user->avatar.'" alt="" class="w-9 h-9 rounded-full"><div><div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm"><span class="font-semibold block">'. $user->name.'</span><span>'.$value->content.' </span></div><div class="p-2 text-xs text-gray-500 dark:text-dark-txt "><span class="font-semibold cursor-pointer">Like </span><span>. </span><span class="font-semibold cursor-pointer"> Reply </span><span> . </span>10m</div></div></div>';
        }

        return response()->json([
            'status' => 'true',
            'data'=> $result_html,
            'post_id'=> $id
        ]);

    }
}
