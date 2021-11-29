<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use App\Models\Messenger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::orderBy('created_at','desc')->get();
        return view('PagesUser.story')->with('stories',$stories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PagesUser.create-story');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= array();
        $data['content'] = htmlspecialchars($request->content);
        $data['user_id'] = Auth::user()->id;
        $media = $request->file('file');
        for ($i=0; $i < count($media) ; $i++) { 
            $get_name_media = $media[$i]->getClientOriginalName();
            $name_media = current(explode('.',$get_name_media));
            $extensions_media = $media[$i]->getClientOriginalExtension();
            $type_media = $media[$i]->getMimeType();
        }
        if($type_media == "image/jpeg" || $type_media == "image/png" || $type_media == "image/jpg" || $type_media == "image/gif")
        {
            $new_name =  $name_media.'-'.uniqid().'.'.$extensions_media;
            $media[0]->move(\public_path('image'),$new_name);
            $data['image'] = $new_name ;
        }else if($type_media == "video/mp4")
        {
            $new_name =  $name_media.'-'.uniqid().'.'.$extensions_media;
            $media[0]->move(\public_path('image'),$new_name);
            $data['video'] = $new_name ;
        }
        if(!empty($request->content) &&  Story::create($data)){
            return response()->json([
                'status' =>'true',
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
        $stories =  Story::where('user_id',$id)->orderBy('created_at','desc')->get();
        return view('PagesUser.your-story')->with('stories', $stories);
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
    public function destroy(Request $request,$id)
    {
        $story_id = $request->storyID;
        $info = Story::where('id', $story_id)->first();
        if(!empty($info))
        {
            if(File::exists(public_path('image/'.$info->image))){
                File::delete(public_path('image/'.$info->image));
            }
            if(File::exists(public_path('image/'.$info->video))){
                File::delete(public_path('image/'.$info->video));
            }
            if(Story::where('id',$story_id)->delete()){
                return response()->json([
                    'status' =>'true',
                ]);
            }else {
                return response()->json([
                    'status' =>'false',
                ]);
            }
        }
        
        // dd($info);
    }
}
