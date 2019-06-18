<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index',[
           'products'=>Product::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('children')->where('parent_id', NULL)->get();
        return view('admin.product.create', [
            'product'    => [],
            'categories' => $categories,
            'delimiter'  => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Traits\UploadTrait\uploadImage uploadOne
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $request->validate([
            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = new Product($request->all());

        $image = $request->file('image');
        if ($image){
            $upload=$request->file('image')->store('uploads/product', 'public');
             if ($upload){
                 $product->image = $upload;
             }
         }
        $next_images = $request->file('next_images');
        if($next_images){
            foreach($request->file('next_images') as $file){
                $data[] =$file->store('uploads/product', 'public');
            }
            $product->next_images=json_encode($data);
        }

        $product->save();
        // Categories
        if($request->input('categories')) :
            $product->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if($product->next_images) $next_images = json_decode($product->next_images, true);
        else  $next_images='';

        return view('admin.product.edit', [
            'product'    => $product,
            'categories' => Category::with('children')->where('parent_id', NULL)->get(),
            'delimiter'  => '',
            'next_images'  => $next_images
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->except('slug'));
        $product = Product::find($product->id);
        $image = $request->file('image');
        if ($image){
            $upload=$request->file('image')->store('uploads/product', 'public');
            if ($upload){
                $product->image = $upload;
            }
        }
        $next_images = $request->file('next_images');
        if($next_images){
            foreach($request->file('next_images') as $file){
                $data[] =$file->store('uploads/product', 'public');
            }
            $product->next_images=json_encode($data);
        }

        $product->save();
        // Categories
        $product->categories()->detach();
        if($request->input('categories')) :
            $product->categories()->attach($request->input('categories'));
        endif;

        return back()->with('success', 'Your article has been added successfully. Please wait for the admin to approve.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     **/
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
