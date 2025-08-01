<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Color;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Color $color)
    {
        // Обновление данных цвета
        $data = $request->validated();
        $color->update($data);

        // Возвращаем представление с обновленным цветом
        return view('color.show', compact('color'));
    }
}