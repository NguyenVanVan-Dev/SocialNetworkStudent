<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    
    public $timestamps = TRUE;
    protected $fillable = [
        'id_userFrom',
        'id_userTo',
        'status',
        'accepted',
    ];

}
