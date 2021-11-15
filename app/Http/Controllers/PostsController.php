<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
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
        $data = array();
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
    public function destroy($id)
    {
        //
    }
}
