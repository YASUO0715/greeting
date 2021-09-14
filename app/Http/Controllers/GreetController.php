<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet($time)
    {

        $hour =['朝','昼','夕方','夜'];
        $hello = ['おはようございます','こんにちは','こんばんは','おやすみ'];

        if($time === 'morning'){
            $time = $hour[0];
            $hello = $hello[0];
        }elseif($time === 'afternoon'){
            $time = $hour[1];
            $hello = $hello[1];
        }elseif($time === 'evening'){
            $time = $hour[2];
            $hello = $hello[2];
        }else{
            $time = $hour[3];
            $hello = $hello[3] ;
        }

        return view('comments.greets', ['time' => $time, 'hello' => $hello]);

        
    }
}
