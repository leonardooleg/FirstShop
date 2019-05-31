<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $list = Category::with('ancestors')->paginate(30);
        //$list = CategoryRepository::getAllWithPadinate(30);
        return view('admin.categories.index', [
            'categories' => $list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        global $categories2;

        $nodes = Category::get()->toTree();
        $traverse = function ($categories, $prefix = '') use (&$traverse) {
            global $categories2;
            foreach ($categories as $category) {
                $categories2.=  '<option value="'.$category->id.'"> '.$prefix.' '.$category->title.' </option>';
                $traverse($category->children, $prefix.'-');
            }
        };
        $traverse($nodes);

        return view('admin.categories.create', [
            'category'   => [],
            'categories' =>$categories2,
            'delimiter'  => ''
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
        $node = new Category($request->all());
        $node->save();
        $node->parent_id = $request->all()['parent_id'];
        $node->save();


        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        global $categoryID;
        $categoryID= $category->parent_id;
        global $categories2;
        $nodes = Category::get()->toTree();
        $traverse = function ($categories, $prefix = '-') use (&$traverse) {
            global $categories2;
            global $categoryID;
            foreach ($categories as $category0) {
                if($categoryID==$category0->id) $categories2.=  '<option value="'.$category0->id.'" selected> '.$prefix.' '.$category0->title.' </option>';
                else $categories2.=  '<option value="'.$category0->id.'"> '.$prefix.' '.$category0->title.' </option>';
                $traverse($category0->children, $prefix.'-');
            }
        };
        $traverse($nodes);


        return view('admin.categories.edit', [
            'category'   => $category,
            'categories' =>$categories2,
            'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->except('slug'));
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
            $category->delete();
            return redirect()->route('admin.category.index');
    }
}
