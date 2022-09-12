<?php

namespace App\Http\Controllers\API\Breed;

use App\Http\Controllers\Controller;
use App\Models\Breed;

class DestroyController extends Controller
{
    public function __invoke(Breed $breed)
    {
        $breed->delete();
        return response()->json(['message' => 'OK']);
    }
}
