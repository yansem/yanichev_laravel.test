<?php

namespace App\Http\Controllers\API\Cat;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Cat $cat)
    {
        return 'cats';
    }
}
