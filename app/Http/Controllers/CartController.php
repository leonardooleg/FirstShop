<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 4/30/2017
 * Time: 10:58 AM
 */

namespace App\Http\Controllers;


use App\Models\Color;
use App\Models\Size;
use Auth;
use Darryldecode\Cart\CartCondition;
use Session;

class CartController extends Controller
{
    public function index()
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }

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
        {
            return view('cart');
        }
    }

    public function add()
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }


        $name = request('name');
        $price = request('price');
        $qty = request('qty');
        $color= Color::where("id_color",request("color"))->first();
        $color_code= $color->color_code;
        $color_name= $color->color;
        $size= Size::where("id_size",request("size"))->first();
        $size_world= $size->size_world;
        $size_rus= $size->size_rus;
        $customAttributes = [
            'id' => request('id'),
            'checked_textiles' => request('checked_textiles'),
            'color' => request('color'),
            'color_code' => $color_code,
            'color_name' => $color_name,
            'size' => request('size'),
            'size_world' => $size_world,
            'size_rus' => $size_rus,
            'img' => request('img')
        ];
        $cart_id = request('id').$customAttributes['color'];
        $item = \Cart::session($userId)->add($cart_id, $name, $price, $qty, $customAttributes);
        return response(array(
            'success' => true,
            'data' => $item,
            'message' => "item added."
        ),201,[]);
    }

    public function addCondition()
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }

        /** @var \Illuminate\Validation\Validator $v */
        $v = validator(request()->all(),[
            'name' => 'required|string',
            'type' => 'required|string',
            'target' => 'required|string',
            'value' => 'required|string',
        ]);

        if($v->fails())
        {
            return response(array(
                'success' => false,
                'data' => [],
                'message' => $v->errors()->first()
            ),400,[]);
        }

        $name = request('name');
        $type = request('type');
        $target = request('target');
        $value = request('value');

        $cartCondition = new CartCondition([
            'name' => $name,
            'type' => $type,
            'target' => $target, // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => $value,
            'attributes' => array()
        ]);

        \Cart::session($userId)->condition($cartCondition);

        return response(array(
            'success' => true,
            'data' => $cartCondition,
            'message' => "condition added."
        ),201,[]);
    }

    public function clearCartConditions()
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }

        \Cart::session($userId)->clearCartConditions();

        return response(array(
            'success' => true,
            'data' => [],
            'message' => "cart conditions cleared."
        ),200,[]);
    }

    public function update($cart_id,$actions)
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }
        \Cart::session($userId);
        //$cart = \Cart::session($userId)->getContent();
        if($actions==1)
        $action=-1;
        else $action=1;
        \Cart::update($cart_id, array(
            'quantity' => $action, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        ));
       // $cart2 = \Cart::session($userId)->getContent();
        return response(array(
        'success' => true,
        'data' => [],
        'message' => "cart updated."
    ),200,[]);
    }

    public function delete($id)
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }

        \Cart::session($userId)->remove($id);

        return response(array(
            'success' => true,
            'data' => $id,
            'message' => "cart item {$id} removed."
        ),200,[]);
    }

    public function details()
    {
        if(Auth::guest()){
            //user is a guest/visitor
            if(Session::has('user_id')){
                $uniqid = Session::get('user_id');
                $userId = $uniqid;
            }else{
                $uniqid = uniqid();
                Session::put('user_id',$uniqid);
                $userId = $uniqid;
            }
        }else{
            //user login
            $userId = Auth::id();
        }

        // get subtotal applied condition amount
        $conditions = \Cart::session($userId)->getConditions();


        // get conditions that are applied to cart sub totals
        $subTotalConditions = $conditions->filter(function (CartCondition $condition) {
            return $condition->getTarget() == 'subtotal';
        })->map(function(CartCondition $c) use ($userId) {
            return [
                'name' => $c->getName(),
                'type' => $c->getType(),
                'target' => $c->getTarget(),
                'value' => $c->getValue(),
            ];
        });

        // get conditions that are applied to cart totals
        $totalConditions = $conditions->filter(function (CartCondition $condition) {
            return $condition->getTarget() == 'total';
        })->map(function(CartCondition $c) {
            return [
                'name' => $c->getName(),
                'type' => $c->getType(),
                'target' => $c->getTarget(),
                'value' => $c->getValue(),
            ];
        });

        return response(array(
            'success' => true,
            'data' => array(
                'total_quantity' => \Cart::session($userId)->getTotalQuantity(),
                'sub_total' => \Cart::session($userId)->getSubTotal(),
                'total' => \Cart::session($userId)->getTotal(),
                'cart_sub_total_conditions_count' => $subTotalConditions->count(),
                'cart_total_conditions_count' => $totalConditions->count(),
            ),
            'message' => "Get cart details success."
        ),200,[]);
    }
}
