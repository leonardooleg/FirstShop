<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Textileable;
use DB;
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

        $textiles = DB::table('textiles')
            ->join('cloths', 'cloths.id_cloths', '=', 'textiles.textiles_cloths')
            ->join('sexes', 'sexes.id_sex', '=', 'textiles.textiles_sex')
            ->join('types', 'types.id_type', '=', 'textiles.textiles_type')
            ->join('sizes', 'sizes.id_size', '=', 'textiles.textiles_size')
            ->join('colors', 'colors.id_color', '=', 'textiles.textiles_color')
            ->select('textiles.id','textiles.textiles_category', 'cloths.cloths', 'sexes.sex', 'types.type', 'sizes.size_world', 'sizes.size_rus', 'colors.color')
            ->get();
        return view('admin.product.create', [
            'product'    => [],
            'categories' => $categories,
            'textiles' => $textiles,
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
        if($textileables=$request->input('textileable')) :
            $deletedRows = Textileable::where('products_id', $product->id)->delete();
            foreach ($textileables as $textileable){
                if($textileable==$request->input('by_default')){
                    $insert_textileable= Textileable::updateOrCreate(
                        ['products_id' => $product->id, 'textiles_id' => $textileable, 'by_default'=> 1]
                    );
                }else{
                    $insert_textileable= Textileable::updateOrCreate(
                        ['products_id' => $product->id, 'textiles_id' => $textileable]
                    );
                }
                $insert_textileable->save();
            }
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
        $categories = Category::with('children')->where('parent_id', NULL)->get();
        $categoryables = DB::table('categoryables')->where('categoryable_id', $product->id)->get();
        foreach ($categoryables as $categoryable){
            $arr_categoryable[]=$categoryable->category_id;
        }
        $ids = join(',',$arr_categoryable);
        $cat_cloth = DB::table('categories')->whereIn('id', $arr_categoryable)->where('cloth', 1)->get();
        $textileables = Textileable::where('products_id', $product->id)->get();
        $textileables_arr =array();
        foreach ($textileables as $textileable){
            $textileables_arr[$textileable->textiles_id]['id']=$textileable->textiles_id;
            $textileables_arr[$textileable->textiles_id]['by_default']=$textileable->by_default;
        }
        if(!$textileables_arr)$textileables_arr =true;
        $textiles = DB::table('textiles')
            ->where('textiles.textiles_category', $cat_cloth[0]->id)
            ->join('cloths', 'cloths.id_cloths', '=', 'textiles.textiles_cloths')
            ->join('sexes', 'sexes.id_sex', '=', 'textiles.textiles_sex')
            ->join('types', 'types.id_type', '=', 'textiles.textiles_type')
            ->join('sizes', 'sizes.id_size', '=', 'textiles.textiles_size')
            ->join('colors', 'colors.id_color', '=', 'textiles.textiles_color')
            ->select('textiles.id','textiles.textiles_category', 'cloths.cloths', 'sexes.sex', 'types.type', 'sizes.id_size', 'sizes.size_world', 'sizes.size_rus', 'colors.id_color', 'colors.color')
            ->get();
        return view('admin.product.edit', [
            'product'    => $product,
            'categories' => $categories,
            'textiles' => $textiles,
            'textileables' => $textileables_arr,
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
        if($textileables=$request->input('textileable')) :
            $deletedRows = Textileable::where('products_id', $product->id)->delete();
            foreach ($textileables as $textileable){
                if($textileable==$request->input('by_default')){
                    $insert_textileable= Textileable::updateOrCreate(
                        ['products_id' => $product->id, 'textiles_id' => $textileable, 'by_default'=> 1]
                    );
                }else{
                    $insert_textileable= Textileable::updateOrCreate(
                        ['products_id' => $product->id, 'textiles_id' => $textileable]
                    );
                }
                $insert_textileable->save();
            }
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
