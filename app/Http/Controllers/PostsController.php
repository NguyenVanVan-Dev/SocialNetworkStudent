<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use App\Models\Comments;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getTime()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        return date_default_timezone_get();
    }
    public function store(Request $request)
    {
        $content = $request->content;
        $user_id = $request->user_id;
        $user_name = $request->user_name;
        $media = $request->file('file');
        $data = array();
        if($media){
           for ($i=0; $i < count($media) ; $i++) { 
            $get_name_media = $media[$i]->getClientOriginalName(); 
            $current_media = current(explode('.',$get_name_media));
            $new_name_media =  $current_media.rand(0,99).'.'.$media[$i]->getClientOriginalExtension();
            if($media[$i]->getClientOriginalExtension() == 'jpeg' || $media[$i]->getClientOriginalExtension() == 'png' || $media[$i]->getClientOriginalExtension() == 'gif' || $media[$i]->getClientOriginalExtension() == 'jpg')
            {
                $data['image'] = $new_name_media;
            }else if ($media[$i]->getClientOriginalExtension() == 'mp4')
            {
                $data['video'] = $new_name_media;
            }
            $media[$i]->move(\public_path('image'),$new_name_media);
           }
        }
        if(!empty($content) && !empty($user_id) && !empty($user_name))
        {
            $data['content'] = htmlspecialchars($content);
            $data['user_id'] = htmlspecialchars($user_id);
            $data['user_name'] = htmlspecialchars($user_name);
            $data_return = Post::create($data);
        }

        if($data_return->count() > 0)
        {
            return response()->json([
                'status' => 'true',
                'data' => $data_return,
            ]);
        } else
        {
            return response()->json([
                'status' => 'false',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        $Post_id = $request->postID;
        $info = Post::where('id', $Post_id)->first();
        Comments::where('post_id',$Post_id)->delete();
        if(!empty($info))
        {
            if(File::exists(public_path('image/'.$info->image))){
                File::delete(public_path('image/'.$info->image));
            }
            if(File::exists(public_path('image/'.$info->video))){
                File::delete(public_path('image/'.$info->video));
            }
            if(Post::where('id',$Post_id)->delete()){
                return response()->json([
                    'status' =>'true',
                ]);
            }else {
                return response()->json([
                    'status' =>'false',
                ]);
            }
        }
    }
    public function display(Request $request)
    {
        
    }
}
