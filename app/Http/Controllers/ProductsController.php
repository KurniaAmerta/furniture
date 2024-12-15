<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Brand;
use App\Models\Photo;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $colors = Color::all();
        $brands = Brand::all();
        $products = Product::with('photos')->get();

        return view('products.index', compact('categories', 'colors', 'brands', 'products'));
    }
}
