<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        // Реализация метода
        return view('color.create');
    }
}