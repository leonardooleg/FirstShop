<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
{
   public function index(){
       $products=Product::all();
       $all_prints=DB::table('products')->count();
       return view('welcome')->with(['products'=>$products,'all_prints'=>$all_prints]);
   }
}
