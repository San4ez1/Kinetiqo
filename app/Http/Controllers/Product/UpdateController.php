<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        // Обновление данных цвета
        $data = $request->validated();
        $product->update($data);

        // Возвращаем представление с обновленным цветом
        return view('product.show', compact('product'));
    }
}