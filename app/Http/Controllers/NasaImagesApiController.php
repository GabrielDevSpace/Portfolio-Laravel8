<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NasaImagesApiController extends Controller
{
    public function nasaimagesapi(Request $request)
    {
        try {
            // URL base da API da NASA
            $baseUrl = "https://images-api.nasa.gov/search?q=";

            // Exemplo de consulta apenas com o parâmetro 'q' (consulta)
            $query = "teste";

            // Montar a URL completa
            $url = $baseUrl . urlencode($query);

            // Fazer a requisição HTTP
            $response = Http::get($url);

            // Decodificar a resposta JSON
            $results = $response->json();

            // Retornar a view com os resultados da API (apenas para teste)
            return view('projetos.nasa-images-api', compact('results'));

        } catch (\Exception $e) {
            // Tratar erros aqui, se necessário
            dd('Erro ao acessar API da NASA: ' . $e->getMessage());
        }
    }
}
