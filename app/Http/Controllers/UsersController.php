<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use App\Models\Messenger;
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
        // if($request->story)
        // {
        //     $data['story'] = $request->story;
        // }
        // if($request->interests)
        // {
        //     $data['interests'] = $request->interests;
        // }
        $data['story'] = $request->story;
        $data['interests'] = $request->interests;
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
            Friend::create($data);
        }
        elseif($action == 'undo_request')
        {
            $to_id = $request->toID;
            $result_request =  Friend::where('id_userFrom',$from_id)->where('id_userTo',$to_id)->orWhere('id_userFrom',$to_id)->where('id_userTo',$from_id)->where('status','Pending')->delete();
            if($result_request)
            {
                return response()->json([
                    'status' => 'true',
                ]);
            }
        }
        elseif($action == 'count_notifi_send_friends')
        {
            $list_friends_request = [];
           $result_notifi =  Friend::where('id_userTo',Auth::user()->id)->where('status' ,'Pending')->where('accepted','No')->count();
           $result_friends =  Friend::where('id_userTo',Auth::user()->id)->where('status' ,'Pending')->where('accepted','No')->get();
           foreach($result_friends as $key => $value)
           {
              $list_friends_request = User::where('id',$value->id_userFrom)->get();
            //   array_push($list_friends_request,User::where('id',$value->id_userFrom)->get());
           }
           return response()->json([
            'quantity_notifi' => $result_notifi,
            'list_request' => empty( $list_friends_request) ? ' ' : $list_friends_request
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
        }elseif($action == 'remove_friend')
        {
            $to_id = $request->toID;
            $result_request =  Friend::where('id_userFrom',$from_id)->where('id_userTo',$to_id)->orWhere('id_userFrom',$to_id)->where('id_userTo',$from_id)->where('status','Accepted')->delete();
            if($result_request)
            {
                return response()->json([
                    'status' => 'true',
                ]);
            }
        }
       
    }
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
    public static function getInfoUser($id)
    {
       $user = User::where('id',$id)->first();
       return $user;
    }
    public function showFriends()
    {
        $friend = DB::table('users')->where('id','!=',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('PagesUser.show-friends')->with('friends',$friend);
    }
    public function listFriends()
    {
        $count_friend =  Friend::where('id_userTo',Auth::user()->id)->orWhere('id_userFrom',Auth::user()->id)->where('status' ,'Accepted')->count();
        $friend = DB::table('users')->where('id','!=',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('PagesUser.list-friends')->with('friends',$friend)->with('qtyfriend',$count_friend);
    }
    public function showProfileFriend(Request $request)
    {
        $friend_id = $request->friendID;
        $data_friend = User::where('id',$friend_id)->get();
        $check_friend = Friend::where('id_userFrom',$friend_id)->where('id_userTo',Auth::user()->id)->orWhere('id_userTo',$friend_id)->where('id_userFrom',Auth::user()->id)->where('status','Accepted')->get();
        // dd($check_friend);
        if($check_friend->count() == 1){
            $btn_handle_friend = '<button class="outline-none bg-blue-500 p-2 hover:bg-blue-700 rounded-md text-base font-medium text-white"><i class="bx bxs-user text-2xl  mr-2 text-white"></i>Friend</button> ';
        }else if($check_friend->count() == 0)
        {
            $btn_handle_friend = '<button class="outline-none bg-blue-500 p-2 hover:bg-blue-700 rounded-md text-base font-medium text-white"><i class="bx bxs-user text-2xl  mr-2 text-white"></i>Add Friends</button> ';
        }

        foreach($data_friend as $key => $value)
        {
            $name = $value->name;
            $avatar = $value->avatar;
            $cover_avatar = $value->cover_avatar;
            $story = $value->story;
            $interests = $value->interests;
        }
        $data_posts = Post::where('user_id',$friend_id)->orderby('created_at','desc')->get();
        $list_posts = '';
        if($data_posts->count() == 0)
        {
            $list_posts = '<div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg">
                                <div class="flex items-center justify-between px-4 py-2">
                                    <div class="flex flex-col justify-center items-center">
                                        <div>
                                            <img src="/image/undraw_people.svg" alt="">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-xl text-gray-500"> Your friend hasn\'t posted any posts yet.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>';
        }
        foreach($data_posts as $key=>$value)
        {
            $image_post = '';
            if(!empty($value->image)){
                $image_post = '<img src="/image/'.$value->image.'" alt="" class=" m-auto h-96">';
            }
            if(!empty($value->video))   
            {
                $video_post = ' <video controls class="mx-auto w-full h-96 " autoplay>
                                    <source  src="/image/'.$value->video.'" type="video/mp4">
                                    <source src="/image/'.$value->video.'" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>';
            }
        
        $list_posts .= '<div class="" id="listPosts">
                            <!-- POST -->
                            <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg" id="post-'.$value->id.'" data-id="'.$value->id.'">
                                <div class="flex items-center justify-between px-4 py-2">
                                    <div class="flex space-x-2 items-center">
                                        <div class="relative">
                                            <img src="/image/'.$avatar.'" class="w-10 h-10 rounded-full" alt="">
                                            <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0
                                            top-3/4 border-white border-2"></span>
                                        </div>
                                        <div>
                                            <div class="font-semibold">
                                            '.$name.'
                                            </div>
                                            <span class="text-sm text-gray-500">'.$value->created_at.'</span>
                                        </div>
                                    </div>
                                    <div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </div>
                                </div>
                            
                                <div class="text-justify px-4 py-2">
                                   '. $value->content.'
                                </div>
                            
                                <div class="py-2 ">
                                        '.$image_post.'
                                        '.$video_post.'
                                </div>
                            
                                <div class="px-4 py-2">
                                    <div class=" flex items-center justify-between">
                                        <div class="flex flex-row-reverse items-center">
                                            <span class="ml-2 text-gray-500 dark:text-dark-txt ">999</span>
                                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500"> <i class="bx bx-angry"></i></span>
                                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-pink-500"><i class="bx bxs-heart"></i></span>
                                            <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500"><i class="bx bxs-happy-alt"></i></span>
                                        </div>
                                        <div class=" text-gray-500 dark:text-dark-txt">
                                            <span>900 comment</span>
                                            <span>500 share</span>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="px-4 py-2 ">
                                    <div class="flex  items-center space-x-2 border-gray-300 border-t border-b">
                                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                                            <i class="bx bx-like"></i>
                                            <span class="font-semibold text-sm">Like</span>
                                        </div>
                                        <div data-id="'.$value->id.'" class="btnComment w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                                            <i class="bx bx-comment-edit"></i>
                                            <span class="font-semibold text-sm">Comment</span>
                                        </div>
                                        <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">
                                            <i class="bx bx-share bx-flip-horizontal"></i>
                                            <span class="font-semibold text-sm">Share</span>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="py-2 px-4" >
                                        <div class="px-4 py-2 hidden" id="listComment-'.$value->id.'">
                                            <div id="commentPost-'.$value->id.'" class="overflow-y-auto max-h-96">

                                            </div>
                                            <div class="flex space-x-2">
                                                <img src="/image/'.Auth::user()->avatar.'" class="w-9 h-9 rounded-full" alt="">
                                                <div class="flex flex-1 bg-gray-100 dark:bg-dark-third rounded-full items-center justify-between bg-transparent px-3">
                                                    <form  class="w-full">
                                                        <input type="text" name="comment" onkeypress="handle(event)" id="'.$value->id.'"  class=" user_comment w-full outline-none bg-transparent flex-1" placeholder="Write a comment">
                                                    </form>
                                                    
                                                    <div class="flex space-x-0 items-center justify-center ">
                                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                                            <i class="bx bx-wink-smile"></i></span>
                                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                                            <i class="bx bx-camera"></i></span>
                                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                                            <i class="bx bx-gift"></i></span>
                                                        <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl">
                                                            <i class="bx bx-happy-heart-eyes"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- END POST -->
                        </div>';
        }
        $info = '<div class="fixed xl:absolute w-full bg-white top-16 md:top-6 xl:h-70vh  xl:top-0 right-0 z-20  h-14">
                    <div class="w-full lg:w-942 xl:w-942 mx-auto h-3/5 rounded-b-md bg-gray-100 hidden xl:block">
                        <img id="cover_avatar_user" src="/image/'.$cover_avatar.'" alt="" class="w-full h-full object-cover rounded-b-3xl">
                    </div>
                    <div class=" absolute bottom-16 right-1/2 transform translate-x-1/2 hidden xl:block">
                        <div class="flex justify-center items-center ">
                            <img id="avatar_user" src="/image/'.$avatar.'" alt="" class="w-52 h-52 rounded-full border-4 border-blue-300 mx-0 object-cover" >
                            <span class="absolute bottom-1/2 right-3 rounded-full w-10 h-10 bg-gray-200 grid place-items-center cursor-pointer">
                                <i class="bx bxs-camera-plus text-3xl text-gray-700"></i>
                            </span>
                        </div>
                        <div class="text-center">
                            <div class="font-semibold text-3xl p-2">
                              '.$name.'
                            </div>
                            <p class="text-sm" id="story_user">'.$story.'<i class="bx bxs-heart text-red-600"></i> </p>
                            <p class="text-sm">'.$interests.'</p>
                            <p class="m-4"> <a href="javascript::void(0) " class="text-blue-500 underline font-medium"> Edit </a></p>
                        </div>
                    </div>
                    <div id="info_header_bottom" class="absolute bg-white m-auto w-full lg:w-942 xl:w-942 p-3 border-t border-gray-200 -bottom-14  xl:bottom-0 right-1/2 transform translate-x-1/2 flex justify-between items-center">
                        <div class=" flex-1 mr-4 hidden xl:block">
                            <ul class="flex justify-between items-center text-base font-medium">
                                <li class=" p-2 border-b-4 border-blue-500 text-blue-500">
                                    <a href=""> Bài viết</a>
                                </li>
                                <li class="hover:bg-gray-200 p-2 rounded-md ">
                                    <a href=""> Giới thiệu</a>
                                </li>
                                <li class="hover:bg-gray-200 p-2 rounded-md ">
                                    <a href=""> Bạn bè <span>1000</span></a>
                                </li>
                                <li class="hover:bg-gray-200 p-2 rounded-md ">
                                    <a href=""> Xem Thêm <i class="bx bx-chevron-down"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 flex justify-around items-center">
                            <div>
                                '.$btn_handle_friend.'
                            </div>
                            <div>
                                <button id="edit_info_profile" class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class="bx bxl-messenger mr-2"></i>Messenger</button>
                            </div>
                            <div>
                                <button class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class="bx bx-dots-horizontal-rounded px-1 "></i></button>
                            </div>
                        </div>
                    </div>
                    <div  id="info_header_top" class="w-max md:w-9/12 fixed bg-white top-0 right-0 transform  transition-all ">
                        <div class=" m-auto w-full lg:w-942 xl:w-942 p-2 border-t border-gray-200  flex justify-between items-center ">
                            <div class=" flex-1 mr-4">
                                <div class="font-semibold ">
                                    <img src="/image/'.$avatar.'" class="w-10 h-10 rounded-full inline-block" alt="">
                                    '.$name.'
                                </div>
                            </div>
                            <div class="flex-1 flex justify-between items-center">
                                <div>
                                    <button class="outline-none bg-blue-500 p-2 hover:bg-blue-700 rounded-md text-base font-medium text-white"><i class="bx bxs-plus-circle mr-2 text-white"></i>Thêm vào tin</button>
                                </div>
                                <div>
                                    <button class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class="bx bxs-edit-alt mr-2"></i>Chỉnh sửa trang cá nhân</button>
                                </div>
                                <div>
                                    <button class="outline-none bg-gray-100 p-2 hover:bg-gray-200 rounded-md text-base font-medium"><i class="bx bx-dots-horizontal-rounded px-1"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        $listpost = '<div class="w-full xl:w-942 lg:w-942 mx-auto flex flex-col lg:flex-row relative xl:mt-63vh">
            <!-- INTRODUCE  -->
            <div class="xl:w-2/5 lg:w-full mt-44 md:mt-36  xl:mt-0 px-2  h-full w-full xl:block">
                <div class="p-3 bg-white rounded-md mt-4 shadow-md">
                    <h3 class="text-left text-3xl text-black font-semibold">Introduce</h3>
                    <span class="my-2 flex  items-center"><i class="bx bx-paper-plane mr-2 text-2xl text-gray-500"></i> 1000 following </span>
                    <div class="flex flex-col">
                        <button class="outline-none bg-gray-100 p-2 my-2 rounded-md hover:bg-gray-200 font-medium text-gray-900">Detailed editing</button>
                        <button class="outline-none bg-gray-100 p-2 my-2 rounded-md hover:bg-gray-200 font-medium text-gray-900">More hobbies</button>
                        <button class="outline-none bg-gray-100 p-2 my-2 rounded-md hover:bg-gray-200 font-medium text-gray-900">More interesting content</button>
                    </div>
                </div>
                <div class="p-3 bg-white rounded-md mt-4 shadow-md">
                    <div class="flex justify-between items-center px-4  mb-5 ">
                        <span class="font-semibold text-gray-500 text-2xl dark:text-dark-txt">Imgae</span>
                        <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                            rounded-md ">See all image</span>
                    </div>
                    <div class="rounded-lg grid grid-cols-3 grid-rows-3 gap-1 overflow-hidden">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                        <img src="#" class=" inline-block" alt="">
                    </div>
                </div>
                <div class="p-3 bg-white rounded-md mt-4 shadow-md">
                    <div class="flex justify-between items-center px-4  mb-5 ">
                        <div>
                            <span class="font-semibold text-gray-500 text-2xl dark:text-dark-txt">Friends </span>
                            <p class="text-gray-500 text-lg ">1000 friends</p>
                        </div>   
                        <span class="text-blue-500 cursor-pointer hover:bg-gray-200 dark:hover:bg-dark-thirdp-2 p-2
                            rounded-md ">See all friends</span>
                    </div>
                    <div class="rounded-lg grid grid-cols-3 grid-rows-3 gap-1 overflow-hidden">
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                       <div class="text-center">
                          <a href="" class="no-underline text-black">
                            <img src="#" class=" inline-block rounded-lg " alt="">
                            <p class="font-medium text-lg">Hải Ba Đông </p>
                          </a>
                       </div>
                    </div>
                </div>
                <div class="mt-auto p-6 text-sm text-gray-500 dark:text-dark-txt">
                    <a href="">Privacy</a>
                    <span>.</span>
                    <a href="">Terms</a>
                    <span>.</span>
                    <a href="">Advertising</a>
                    <span>.</span>
                    <a href="">Cookies</a>
                    <span>.</span>
                    <a href="">Ad choices</a>
                    <span>.</span>
                    <a href="">More</a>
                    <span>.</span>
                    <a href="">Vấn Nguyễn 2021</a>
                 </div>
            </div>
            <!-- END INTRODUCE -->
            <div class="xl:w-3/5 lg:w-full   px-2  w-full">
                <!-- LIST POST -->
                   '.$list_posts.'
                <!--  END LIST POST -->
            </div>
            
        </div>';
        return response()->json([
            'status' => 'true',
            'data' => $info.$listpost,
            ]);
    }
    public function suggestionFriends()
    {
        $suggestion_friend = DB::table('users')->where('id','!=',Auth::user()->id)->get();
        return view('PagesUser.suggestion-friends')->with('friends',$suggestion_friend);   
    }
    public static function getNotifiMes($id)
    {
       $user = Messenger::where('id_userTo',Auth::user()->id)->where('id_userFrom',$id)->where('is_read',0)->count();
       return $user;
    }
    public static function getNumNotiMes()
    {
       $num = Messenger::where('id_userTo',Auth::user()->id)->where('is_read',0)->count();
       return $num;
    }
    public static function checkRule($content)
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
}
