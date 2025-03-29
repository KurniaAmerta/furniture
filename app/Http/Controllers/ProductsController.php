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
    public function index(Request $request)
    {
        // Get all filter options
        $categories = Category::all();
        $colors = Color::all();
        $brands = Brand::all();

        // Start query
        $query = Product::with('photos');

        // Apply category filter
        if ($request->has('categories')) {
            $categoryIds = is_array($request->categories) ? $request->categories : explode(',', $request->categories);
            $query->whereIn('category_id', $categoryIds);
        }

        // Apply color filter
        if ($request->has('colors')) {
            $colorIds = is_array($request->colors) ? $request->colors : explode(',', $request->colors);
            $query->whereIn('color_id', $colorIds);
        }

        // Apply brand filter
        if ($request->has('brands')) {
            $brandIds = is_array($request->brands) ? $request->brands : explode(',', $request->brands);
            $query->whereIn('brand_id', $brandIds);
        }

        // Apply dimension filter
        if ($request->has('dimensions')) {
            $dimensions = is_array($request->dimensions) ? $request->dimensions : explode(',', $request->dimensions);
            $dimensions = array_map('strtolower', $dimensions);
            $query->whereIn('dimension', $dimensions);
        }

        // Get filtered products with pagination
        $products = $query->paginate(10)->appends($request->query());

        return view('products.index', compact('categories', 'colors', 'brands', 'products'));
    }
}
