<?php

namespace App\Http\Controllers\API\Breed;

use App\Http\Controllers\Controller;
use App\Models\Cat;

class UpdateController extends Controller
{
    public function __invoke(Cat $cat)
    {
        return 'cats';
    }
}
