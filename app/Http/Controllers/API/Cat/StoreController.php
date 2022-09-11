<?php

namespace App\Http\Controllers\API\Cat;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke()
    {
        return 'cats';
    }
}
