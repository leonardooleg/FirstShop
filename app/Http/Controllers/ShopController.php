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
            'products'=>$category->products()->where('published',1)->paginate(12),
            'all_prints'=>$all_prints
        ]);
    }

    public function product($slug)
    {
        $product=Product::where('slug',$slug)->first();
        $all_prints=DB::table('products')->count();

        $category = $product->categories()->pluck('slug')->last();
        $category = Category::where('slug',$category)->first();
        return view('shop.product',[
            'product'=>$product,
            'all_prints'=>$all_prints,
            'category'=>$category
        ]);
    }
}
