<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        //baca text
        $chat = DB::table('chat')->first();

        //convert
        $emoji = [
            ':))' => '1.png',
            ':3' => '2.png',
            ':P' => '3.png',
            ':C' => '4.png',
            ';)' => '5.png'
        ];

        //pecah string
        $wordArray = explode(' ', $chat->pesan);

        foreach ($wordArray as &$word) {
            if (array_key_exists($word, $emoji)) {
                $word = '<img src="' . asset('Assets/Pictures/]' . $emoji[$word]) . '" alt="' . $word . '" style="width:24px; height:24px;" />';
            }
        }

        $convertedText = implode(' ', $wordArray);

        return view('indexchat', ['convertedText' => $convertedText]);


        // $chat = DB::table('chat')->get();

        // return view('indexchat',['chat'=>$chat]);
    }
}
