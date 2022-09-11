<?php

namespace App\Http\Controllers\API\Cat;

use App\Http\Controllers\Controller;
use App\Http\Resources\Cat\CatResource;
use App\Models\Cat;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cats = Cat::all();
        return CatResource::collection($cats);
    }
}
