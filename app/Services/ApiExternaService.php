<?php

namespace App\Services;

use  Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ApiExternaService
{

    public function buscarDados()
    {

        return Cache::remember('api_externa', 60, function () {
            $response = Http::timeout(5)
                ->retry(3, 200)
                ->acceptJson()
                ->get('https://jsonplaceholder.typicode.com/posts');

            if ($response->failed()) {
                throw new \Exception('Erro ao consumir API externa');
            }
            return $response->json();
        });
    }
}