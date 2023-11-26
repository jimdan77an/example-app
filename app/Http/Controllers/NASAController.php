<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NASAController extends Controller
{
    public function makeRequest()
    {
        // Aquí se realiza la solicitud a la API de la NASA
        $response = Http::get('https://api.nasa.gov/planetary/apod', [
            'api_key' => 'UcppY2jQwvKjeDQ2uUNdQgdmLKE58KpvHieEeoqO',
        ]);

        // Aqui se retorna la vista para mostrar la llamada a la API
        return view('mis-views.nasa-request', ['data' => $response->json()]);
    }
}

