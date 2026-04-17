<?php


namespace  App\Http\Controllers;

use App\Services\ApiExternaService;

class  ApiController extends Controller
{

    public function index(ApiExternaService $service)
    {
        //função response e helper global disponível no laravel
        return response()->json(
            $service->buscarDados()
        );
    }
}