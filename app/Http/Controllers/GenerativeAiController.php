<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GenerativeAiController extends Controller
{
public function sendRequest()
{

    $completed_text = "Hello";
return view('site.ai', compact('completed_text'));
// return response()->json(['completed_text' => $completed_text]);


}
}