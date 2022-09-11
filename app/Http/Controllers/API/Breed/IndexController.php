<?php

namespace App\Http\Controllers\API\Breed;

use App\Http\Controllers\Controller;
use App\Http\Resources\Breed\BreedResource;
use App\Models\Breed;

class IndexController extends Controller
{
    public function __invoke()
    {
        $breeds = Breed::all();
        return BreedResource::collection($breeds);
    }
}
