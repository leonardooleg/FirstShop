<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $all_prints=DB::table('products')->count();
        $product=Product::where('id',$id)->get();
        $category= CategoryProduct::where('product_id',$id)->get();
        $category= $category[0]->category_id;
        $category6=Category::where('id',$category)->get();
        $category_url=array();
        $category_url[$category6[0]->id]=$category6[0]->name;
        $category5=Category::where('id',$category6[0]->parent_id)->get();
        $category_url[$category5[0]->id]=$category5[0]->name;
        $category4=Category::where('id',$category5[0]->parent_id)->get();
        $category_url[$category4[0]->id]=$category4[0]->name;
        $category3=Category::where('id',$category4[0]->parent_id)->get();
        $category_url[$category3[0]->id]=$category3[0]->name;
        $category2=Category::where('id',$category3[0]->parent_id)->get();
        $category_url[$category2[0]->id]=$category2[0]->name;
        /*$category1=Category::where('id',$category2[0]->parent_id)->get();
        $category_url[$category1[0]->id]=$category1[0]->name;*/
        $category_url =array_reverse($category_url,true);
        return view('product')->with(['product'=>$product[0],'all_prints'=>$all_prints, 'category_url'=>$category_url]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
