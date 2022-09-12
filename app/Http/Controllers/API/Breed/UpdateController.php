<?php

namespace App\Http\Controllers\API\Breed;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Breed\UpdateRequest;
use App\Models\Breed;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Breed $breed)
    {
        $data = $request->validated();
        $breed->update($data);
        return response()->json(['message' => 'OK']);
    }
}
