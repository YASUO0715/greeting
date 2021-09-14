<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet($time)
    {

        if($time === 'morning'){
            $time = '朝';
            $hello = 'おはようございます';
        }elseif($time === 'afternoon'){
            $time = '昼';
            $hello = 'こんにちは';
        }elseif($time === 'evening'){
            $time = '夕方';
            $hello = 'こんばんは';
        }else{
            $time = '夜';
            $hello = 'おやすみ';
        }

        return view('comments.greets', ['time' => $time, 'hello' => $hello]);
    }



    public function freeword($msg)
    {
        return view('comments.freeword', [
            'msg' => $msg]);
    }


    public function random($randomword)
    {
        $randomword = ["おはよう", "こんにちは", "こんばんわ", "おやすみ"];

        $response = $randomword[array_rand($randomword)];

        return view('comments.random', [
            'response' => $response]);
    }

}
