<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        // Возвращаем представление для редактирования цвета
        return view('product.edit', compact('product'));
    }
}