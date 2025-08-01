<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest; // Добавленный импорт
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        // Реализация метода
        $data = $request->validated();
        $category->update($data);

        return view('category.show', compact('category'));
    }
}
