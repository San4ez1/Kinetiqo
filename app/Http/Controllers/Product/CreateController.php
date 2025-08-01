<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Group;

class CreateController extends Controller
{
    public function __invoke()
    {
        // Реализация метода
        $tags = Tag::all();

        $groups = Group::all();

        $colors = Color::all();

        $categories = Category::all();

        return view('product.create', compact('tags', 'groups', 'colors', 'categories'));

    }
}