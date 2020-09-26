<?php

namespace App\Http\Controllers\Categoryes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function sport()
    {
        return view('sport');
    }
}
