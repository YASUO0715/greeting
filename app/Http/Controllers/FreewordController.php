<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreewordController extends Controller
{
    public function freeword($msg)
    {
        return view('comments.freeword', [
            'msg' => $msg]);
    }
}
