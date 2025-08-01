<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Получаем все цвета из базы данных
        $products = Product::all();
        
        // Передаем их в представление
        return view('product.index', compact('products'));
    }
}