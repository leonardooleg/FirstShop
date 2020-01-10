<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Dashboard
    public function dashboard() {
        $textiles = DB::table('textiles')
            ->where('textiles_qty','<', 10)
            ->join('categories', 'categories.id', '=', 'textiles.textiles_category')
            ->join('cloths', 'cloths.id_cloths', '=', 'textiles.textiles_cloths')
            ->join('sexes', 'sexes.id_sex', '=', 'textiles.textiles_sex')
            ->join('types', 'types.id_type', '=', 'textiles.textiles_type')
            ->join('sizes', 'sizes.id_size', '=', 'textiles.textiles_size')
            ->join('colors', 'colors.id_color', '=', 'textiles.textiles_color')
            ->select('categories.title','textiles.id','textiles.textiles_category', 'cloths.cloths', 'sexes.sex', 'types.type', 'sizes.id_size', 'sizes.size_world', 'sizes.size_rus', 'colors.id_color', 'colors.color','textiles.textiles_qty')
            ->get();
        return view('admin.dashboard', [
            'textiles'=>$textiles,
            'categories'=>Category::lastCategories(5),
            'products'=>Product::lastProducts(5),
            'count_categories'=>Category::count(),
            'count_products'=>Product::count(),
            'user'=>\Auth::user()->name

        ]);
    }
    //График
    public function chartData() {
        return  [
            'labels'=>['март', 'апрель', 'май', 'июнь'],
            'datasets'=>array(
                [
                    'label'=>'Продажи',
                    'backgroundColor'=>'#F26202',
                    'data'=>[1000,5000,100,300],
                ],
                [
                'label'=>'Заказы',
                'backgroundColor'=>'#3490dc',
                'data'=>[15000,500,1000,3000],
            ])
        ];
    }
}
