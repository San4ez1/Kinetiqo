<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Models\ProductTag; 
use App\Models\ColorProduct;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        // Валидация и сохранение цвета
        $data = $request->validated();

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate([
            'title' => $data['title']
        ], $data);

        foreach ($tagsIds as $tagsId) {
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ]);
        }

        foreach ($colorsIds as $colorId) {
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorId,
            ]);
        }

        // Перенаправление на список цветов
        return redirect()->route('product.index');
    }
}