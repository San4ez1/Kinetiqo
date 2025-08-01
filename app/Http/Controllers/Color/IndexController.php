<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Получаем все цвета из базы данных
        $colors = Color::all();
        
        // Передаем их в представление
        return view('color.index', compact('colors'));
    }
}