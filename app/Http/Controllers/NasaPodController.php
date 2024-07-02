<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NasaPodController extends Controller
{
    protected $apiUrl = 'https://api.nasa.gov/planetary/apod';

    public function index(Request $request)
    {
        $date = $request->query('date', now()->format('Y-m-d'));
        $response = Http::get($this->apiUrl, [
            'api_key' => config('services.nasa.api_key'),
        ]);

        if ($response->failed()) {
            abort(500, 'Erro ao recuperar os dados do APOD da NASA.');
        }

        $data = $response->json();
        
        return view('projetos.nasa-pod', [
            'apod' => $data,
        ]);
    }

    public function show(Request $request)
    {
        $date = $request->input('date', now()->format('Y-m-d'));

        $response = Http::get($this->apiUrl, [
            'api_key' => config('services.nasa.api_key'),
            'date' => $date,
        ]);

        if ($response->failed()) {
            abort(500, 'Erro ao recuperar os dados do APOD da NASA para a data especificada.');
        }

        $data = $response->json();

        return view('projetos.nasa-pod', [
            'apod' => $data,
        ]);
    }

    public function previousDate() {
        $currentDate = request()->query('date', now()->format('Y-m-d'));
        $previousDate = date('Y-m-d', strtotime($currentDate . ' -1 day'));
        return redirect()->route('nasa-pod.index', ['date' => $previousDate]);
    }
    
    public function nextDate() {
        $currentDate = request()->query('date', now()->format('Y-m-d'));
        $nextDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
        return redirect()->route('nasa-pod.index', ['date' => $nextDate]);
    }
    
}
