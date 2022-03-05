<?php 
use App\Http\Controllers\UsersController;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use App\Models\Messenger;
use App\Models\Comments;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

function countLike($id)
{
    $count_comment = Post::where('id',$id)->first();

    return $count_comment->like;
}