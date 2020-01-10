<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cloth;
use App\Models\Color;
use App\Models\Sex;
use App\Models\Size;
use App\Models\Textile;
use App\Models\Type;
use DB;
use Illuminate\Http\Request;
use function App\Http\Controllers\Admin;

class TextilesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /*$textiles = DB::table('textiles')
            ->leftJoin('categories', 'textiles.textiles_category', '=', 'categories.id')
            ->select(
                'textiles.id',
                'categories.title',
                'textiles.textiles_qty'
            )
            ->orderBy('created_at', 'desc')
            ->paginate(15);*/
        $textiles = DB::table('textiles')
            ->leftJoin('categories', 'textiles.textiles_category', '=', 'categories.id')
            ->select(
                'textiles.id',
                'categories.title',
                'textiles.textiles_qty',
                'textiles.created_at',
                'textiles.updated_at'
            )
            ->paginate(15);
        return view('admin.textiles.index',[
            'textiles'=>$textiles
        ]);
    }

   /* public function table($id)
    {

        /*return DB::table('textiles')
            ->join('cloths', 'cloths.id_cloths', '=', 'textiles.cloths')
            ->join('sexes', 'sexes.id_sex', '=', 'textiles.sex')
            ->join('types', 'types.id_type', '=', 'textiles.type')
            ->join('sizes', 'sizes.id_size', '=', 'textiles.size')
            ->join('colors', 'colors.id_color', '=', 'textiles.color')
            ->select('cloths.cloths', 'sexes.sex', 'types.type', 'sizes.size_world', 'sizes.size_rus', 'colors.color')
            ->get();*//*
        return Textile::orderBy('id', 'asc')->where('textiles_category', $id)->get();


    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cloth  =Cloth::all();
        $sex  =Sex::all();
        $type  =Type::all();
        $size  =Size::all();
        $color  =Color::all();
        return view('admin.textiles.create', [
            'categories' => Category::with('children')->where('cloth', 1)->get(),
            'cloth' => $cloth,
            'sex' => $sex,
            'type' => $type,
            'size' => $size,
            'color' => $color
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $textiles = new Textile($request->all());

        $textiles->save();


        return redirect()->route('admin.textiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $textiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textile  $textiles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $textiles = Textile::findOrFail($id);
        $cloth  =Cloth::all();
        $sex  =Sex::all();
        $type  =Type::all();
        $size  =Size::all();
        $color  =Color::all();
        return view('admin.textiles.edit', [
            'categories' => Category::with('children')->where('cloth', 1)->get(),
            'cloth' => $cloth,
            'sex' => $sex,
            'type' => $type,
            'size' => $size,
            'color' => $color,
            'textiles' => $textiles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Textile  $textiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $task = Textile::findOrFail($id);
        $input = $request->all();
        $task->fill($input)->save();
        return back()->with('success', 'Your Textile has been added successfully. Please wait for the admin to approve.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        return view('admin.cloth.index', [
            'test' => 'test',
        ]);
    }

}
