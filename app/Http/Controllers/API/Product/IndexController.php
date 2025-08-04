<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;           // импорт модели Product
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\IndexProductResource;
use Illuminate\Http\Request;
use App\Http\Filters\ProductFilter;

use App\Http\Requests\API\Product\IndexRequest;


class IndexController extends Controller
{
    public function __invoke(IndexRequest $request) 
    {
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        $products = Product::filter($filter)->paginate(12, ['*'], 'page', $data['page']);
        return IndexProductResource::collection($products);
    }
}
