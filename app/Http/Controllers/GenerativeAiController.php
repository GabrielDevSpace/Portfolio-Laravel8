<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenerativeAiController extends Controller
{
    public function showForm()
    {
        return view('site.openai');
    }

    public function generateChat(Request $request)
    {
        $input = $request->input('input');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . config('services.openai.api_key'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ["role" => "user", "content" => $input]
            ],
            'temperature' => 0.7,
            //'max_tokens' => 150,
        ])->throw()->json();

        $output = $response['choices'][0]['message']['content'];

        return view('site.openai', ['output' => $output]);
    }

}