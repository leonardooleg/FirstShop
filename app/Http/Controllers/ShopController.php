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
        $next_images = json_decode($product->next_images, true);

        return view('shop.product',[
            'product'=>$product,
            'all_prints'=>$all_prints,
            'category'=>$category,
            'next_images'=>$next_images
        ]);
    }

    public function constructor()
    {

        $all_prints=DB::table('products')->count();
        return view('shop.constructor',[
            'all_prints'=>$all_prints,
        ]);
    }
    public function constructor2()
    {

        $all_prints=DB::table('products')->count();
        return view('shop.constructor2',[
            'all_prints'=>$all_prints,
        ]);
    }
}
