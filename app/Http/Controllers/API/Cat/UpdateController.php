<?php

namespace App\Http\Controllers\API\Cat;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Cat\UpdateRequest;
use App\Models\Cat;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Cat $cat)
    {
        $data = $request->validated();
        $cat->update($data);
        return response()->json(['message' => 'OK']);
    }
}
