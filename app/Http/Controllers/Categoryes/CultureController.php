<?php

namespace App\Http\Controllers\Categoryes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function culture()
    {
        return view('culture');
    }
}
