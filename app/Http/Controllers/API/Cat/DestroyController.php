<?php

namespace App\Http\Controllers\API\Cat;

use App\Http\Controllers\Controller;
use App\Models\Cat;

class DestroyController extends Controller
{
    public function __invoke(Cat $cat)
    {
        $cat->delete();
        return response()->json(['message' => 'OK']);
    }
}
