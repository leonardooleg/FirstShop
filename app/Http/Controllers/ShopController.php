<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Textile;
use App\Models\Textileable;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function category($slug)
    {
        $all_prints=DB::table('products')->count();
        $category = Category::where('slug',$slug)->first();
        $products=Product::
        where('products.published', '1')->where('textileables.by_default', '1')
            ->join('textileables', 'textileables.products_id', '=', 'products.id')
            ->select('products.*','textileables.textiles_id')
            ->paginate(30);
        return view('shop.category',[
            'category'=>$category,
            'products'=>$products,
            'all_prints'=>$all_prints
        ]);
    }

    public function product($slug)
    {
        $product=Product::where('slug',$slug)->first();
        $all_prints=DB::table('products')->count();

        $category = $product->categories()->pluck('slug')->last();
        $category = Category::where('slug',$category)->first();
        $roots = Category::ancestorsOf($category->id);
        foreach ($roots as $root){
            if($root->cloth==1){
                $array_textile=Textile::where('textiles_category',$root->id)->first();
            }

        }
        $next_images = json_decode($product->next_images, true);

        $textileables = Textileable::where('products_id', $product->id)->get();
        $textileables_arr =array();
        foreach ($textileables as $textileable){
            $textileables_arr[$textileable->textiles_id]['id']=$textileable->textiles_id;
            $textileables_arr[$textileable->textiles_id]['by_default']=$textileable->by_default;
        }
        ksort($textileables_arr);
        if(!$textileables_arr){
            $textileables_arr =true;
        }else{
            foreach ($textileables_arr as $textileables_one){
                $textiles_arr[]=$textileables_one['id'];
            }
        }
        $textiles = DB::table('textiles')
            //
            ->whereIn('textiles.id', $textiles_arr)
            ->join('sizes', 'sizes.id_size', '=', 'textiles.textiles_size')
            ->join('colors', 'colors.id_color', '=', 'textiles.textiles_color')
            ->select('textiles.id','textiles.textiles_category','textiles.textiles_size', 'sizes.size_world', 'sizes.size_rus', 'textiles.textiles_color', 'colors.color', 'colors.color_code')
            //->groupBy('textiles.textiles_color')
            ->get()->toArray();
        $textiles_size = DB::table('textiles')
            //
            ->whereIn('textiles.id', $textiles_arr)
            ->join('sizes', 'sizes.id_size', '=', 'textiles.textiles_size')
            ->join('colors', 'colors.id_color', '=', 'textiles.textiles_color')
            ->select('textiles.id','textiles.textiles_category','textiles.textiles_size', 'sizes.size_world', 'sizes.size_rus', 'textiles.textiles_color', 'colors.id_color', 'colors.color', 'colors.color_code')
            ->groupBy('textiles.textiles_size')
            ->get();
        $textiles_color = DB::table('textiles')
            //
            ->whereIn('textiles.id', $textiles_arr)
            ->join('sizes', 'sizes.id_size', '=', 'textiles.textiles_size')
            ->join('colors', 'colors.id_color', '=', 'textiles.textiles_color')
            ->select('textiles.id','textiles.textiles_category', 'sizes.size_world', 'sizes.size_rus', 'textiles.textiles_color', 'colors.id_color', 'colors.color', 'colors.color_code')
            ->groupBy('textiles.textiles_color')
            ->get();
       // $textiles_color = $textiles->groupBy('textiles_color')->all();
        return view('shop.product',[
            'product'=>$product,
            'all_prints'=>$all_prints,
            'category'=>$category,
            'textiles'=>$textiles,
            'textiles_color'=>$textiles_color,
            'textiles_size'=>$textiles_size,
            'next_images'=>$next_images,
            'array_textile'=>$array_textile
        ]);
    }
    public function productID($id)
    {
        $product=Product::where('id',$id)->first();
        return redirect('product/'. $product->slug);
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
