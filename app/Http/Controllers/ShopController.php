<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function category($slug)
    {
        $all_prints=DB::table('products')->count();
        $category = Category::where('slug',$slug)->first();
        return view('shop.category',[
            'category'=>$category,
            'products'=>$category->products()->where('published',1)->paginate(3),
            'all_prints'=>$all_prints
        ]);
    }

    public function product($slug)
    {
        $categories = Category::with('ancestors')->get();


        $all_prints=DB::table('products')->count();
        return view('shop.product',[
            'product'=>Product::where('slug',$slug)->first(),
            'categories'=> $categories,
            'all_prints'=>$all_prints
        ]);
    }
}
