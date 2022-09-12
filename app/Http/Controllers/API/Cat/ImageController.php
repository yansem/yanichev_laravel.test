<?php

namespace App\Http\Controllers\API\Cat;

use App\Components\ImportImageClient;
use App\Http\Controllers\Controller;
use App\Http\Resources\Cat\CatResource;
use App\Models\Cat;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('https://api.thecatapi.com/v1/images/search');
        return $response;
    }
}
