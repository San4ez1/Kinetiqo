<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Color $color)
    {
        // Возвращаем представление для редактирования цвета
        return view('color.edit', compact('color'));
    }
}