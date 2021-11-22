<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_userFrom',
        'id_userTo',
        'message',
        'is_read',
    ];
}
