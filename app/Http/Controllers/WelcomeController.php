<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
   public function index(){
       $products=Product::where('published', '1')->paginate(30);
       $all_prints=DB::table('products')->count();
       return view('welcome')->with(['products'=>$products,'all_prints'=>$all_prints]);
   }
}
