<?php

namespace App\Http\Controllers\API\Breed;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Breed\StoreRequest;
use App\Models\Breed;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Breed::create($data);
        return response()->json(['message' => 'OK']);
    }
}
