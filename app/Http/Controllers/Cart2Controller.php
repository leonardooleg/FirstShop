<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 4/30/2017
 * Time: 10:58 AM
 */

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;

class Cart2Controller extends Controller
{
    public function go()
    {
        $userId = 1; // get this from session or wherever it came from
        /*
                if(request()->ajax())
                {
                    $items = [];
                    $cartCollection = \Cart::session($userId)->getContent();
                    $cart = $cartCollection->sort();
                    $cart->each(function($item) use (&$items)
                    {
                        $items[] = $item;
                    });
                    return response(array(
                        'success' => true,
                        'data' => $items,
                        'message' => 'cart get items success'
                    ),200,[]);
                }
                else
                {*/
        return view('cart2');
        /*}*/
    }
    public function index()
    {
        /*$userId = 1; // get this from session or wherever it came from

        if(request()->ajax())
        {
            $items = [];
            $cartCollection = \Cart::session($userId)->getContent();
            $cart = $cartCollection->sort();
            $cart->each(function($item) use (&$items)
            {
                $items[] = $item;
            });
            return response(array(
                'success' => true,
                'data' => $items,
                'message' => 'cart get items success'
            ),200,[]);
        }
        else
        {*/
            return view('cart2');
        /*}*/
    }

    public function add(Request $request)
    {
        $userId = 1; // get this from session or wherever it came from
        $c_id= $userId.'_cart_items';
        $orders = new Order($request->all());
        $cartCollection = \Cart::session($userId)->getContent();
        $cart = $cartCollection->sort();
        $cart->each(function($item) use (&$items)
        {
            $items[] = $item;
        });
        $orders->cart_data =json_encode($items);
        $orders->save();
        if($orders){
            \Cart::session($userId)->clear();

            return view('cart3',[
                'success' => true,
                'data' => $_REQUEST,
                'message' => "Заказ успешный!"
            ]);
        }else{
            return back()->with('error', 'Your article has been added error. Please wait for the admin to approve.');
        }


    }


   /* public function finish()
    {
        $userId = 1; // get this from session or wherever it came from



        return view('cart3.finish',[
            'product'=>$product,
            'all_prints'=>$all_prints,
            'category'=>$category,
            'textiles'=>$textiles,
            'textiles_color'=>$textiles_color,
            'textiles_size'=>$textiles_size,
            'next_images'=>$next_images,
            'array_textile'=>$array_textile
        ]);
    }*/


}
