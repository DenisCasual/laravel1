<?php

namespace App\Http\Controllers\Categoryes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoliticsController extends Controller
{
    public function politics()
    {
        return view('politics');
    }
}
