<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\Customers;
use App\Models\Products;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::all();
        $customers = Customers::all();
        $user = User::all();
        return view('admin.orders.index', array('orders'=> $orders, 'customers'=> $customers, 'user'=> $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders =Orders::create($request->all());
        if($orders){
            return redirect()->route('orders.index');
        }
        return redirect()->route('orders.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = \App\Models\Orders::find($id);
        return view('admin.orders.show', array('orders'=>$orders));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customers::all();
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        $orders =Orders::find($id);
        $products =Products::find($id);
        $order_details= Order_details::all();
        return view('admin.orders.edit',array('orders'=>$orders, 'products'=> $products, 'customers'=> $customers, 'order_details'=> $order_details), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orders = Orders::find($id);
        $orders->update($request->all());
        if($orders){
            return redirect()->route('orders.index');
        }
        return redirect()->route('orders.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Orders::find($id);
        $orders->delete();
        return redirect()->route('orders.index');
    }
}
