<?php

namespace App\Http\Controllers\API\Cat;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Cat\StoreRequest;
use App\Models\Cat;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Cat::create($data);
        return response()->json(['message' => 'OK']);
    }
}
