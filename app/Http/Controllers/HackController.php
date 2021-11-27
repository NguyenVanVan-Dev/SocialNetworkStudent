<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HackController extends Controller
{
    //
public function hack()
{
        $string = 'Some text to be encrypted';
    $encrypted = \Illuminate\Support\Facades\Crypt::encrypt($string);
    $decrypted_string = \Illuminate\Support\Facades\Crypt::decrypt($encrypted);

    var_dump($string);
    var_dump($encrypted);
    var_dump($decrypted_string);
    return view('hack');
}

}
