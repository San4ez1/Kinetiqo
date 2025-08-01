<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Color $color)
    {
        // Удаление цвета
        $color->delete();
        
        // Перенаправление на список цветов
        return redirect()->route('color.index');
    }
}