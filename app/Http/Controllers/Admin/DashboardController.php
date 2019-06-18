<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Dashboard
    public function dashboard() {
        return view('admin.dashboard', [
            'categories'=>Category::lastCategories(5),
            'products'=>Product::lastProducts(5),
            'count_categories'=>Category::count(),
            'count_products'=>Product::count()
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
