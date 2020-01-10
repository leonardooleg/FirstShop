<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
   public function index(){
      // $products=Product::where('published', '1')->paginate(30);
       $products=Product::
           where('products.published', '1')->where('textileables.by_default', '1')
           ->join('textileables', 'textileables.products_id', '=', 'products.id')
           ->select('products.*','textileables.textiles_id')
           ->paginate(30);
       $all_prints=DB::table('products')->count();
       return view('welcome')->with(['products'=>$products,'all_prints'=>$all_prints]);
   }
}
