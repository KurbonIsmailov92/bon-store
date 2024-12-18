<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * @method homePage()
 */

class HomeController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $categories = Category::query()
            ->homePage()
            ->get();

        $products = Product::query()
            ->homePage()
            ->get();

        $brands = Brand::query()
            ->homePage()
            ->get();


        return view('index', compact('categories', 'products', 'brands'));
    }
}
