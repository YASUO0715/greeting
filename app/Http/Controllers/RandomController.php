<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function random($randomword)
    {
        $randomword = [ "おはよう", "こんにちは", "こんばんわ", "おやすみ"] ;

        $response = $randomword[ array_rand( $randomword ) ] ;

        return view('comments.random', [
            'response' => $response]);
    }
}
