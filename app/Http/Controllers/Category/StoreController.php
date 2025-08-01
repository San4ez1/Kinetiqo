<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest; // <- Добавьте эту строку
use App\Models\Category; // <- Если используете модель Category

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        // Реализация метода
        $data = $request->validated();
        Category::firstOrCreate($data);

        return redirect()->route('category.index');
    }
}
