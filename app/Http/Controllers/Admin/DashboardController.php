<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Dashboard
    public function dashboard() {
        return view('admin.dashboard', [
            'categories'=>Category::lastCategories(5),
            'products'=>Product::lastProducts(5),
            'count_categories'=>Category::count(),
            'count_products'=>Product::count(),
        ]);
    }
}
