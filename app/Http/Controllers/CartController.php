<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Order_details;
use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;


class CartController extends Controller
{
    public function getAddCart($id)
    {
        $products = Products::find($id);
        Cart::add(['id' => $id, 'name' => $products->name, 'qty' => 1, 'price' => $products->price, 'weight' => 550, 'options' => ['img' => $products->image]]);
        return redirect('cart/show');
    }
    public function getShowCart()
    {
        $data['items'] = Cart::content();
        $data['total'] = Cart::total();
        return view('frontend.cart', $data);
    }
    
    public function getDeleteCart($id)
    {
        if ($id == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
    }


    public function postComplete(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        $customers = new Customers();
        $customers->name = $request->name;
        $customers->phonenumber = $request->phone;
        $customers->address = $request->add;
        $customers->email = $request->email;
        $customers->save();


        $order = new Orders(); 
        $order->customer_id = $customers->id;
        $order->order_date = date('Y-m-d');
        $order->address = $request->add;
        $order->total = Cart::total(2, '', '');
        $order->note = $request->note;
        $order->user_id = 1;
        $order->save();


        
        foreach($data['cart'] as $products){
            $orderdetails = new Order_details(); 
            $orderdetails->order_id = $order->id;
            $orderdetails->product_id = $products->id;
            $orderdetails->quantity = $products->qty;
            $orderdetails->total = $products->price;
            $orderdetails->save();
        }
        
        return redirect('complete');
    }

    public function getComplete()
    {
        Cart::destroy();
        return view('frontend.complete');
    }
}


