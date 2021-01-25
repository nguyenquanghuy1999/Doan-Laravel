<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order_details;
use App\Models\Orders;
use App\Models\Customers;



class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_details = Order_details::all();
        $orders= Orders::all();
        return view('admin.order_details.index', array('order_details'=> $order_details, 'orders'=> $orders));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_details =Order_details::create($request->all());
        if($order_details){
            return redirect()->route('order_details.index');
        }
        return redirect()->route('order_details.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($orders_id)
    {
        $orders = Orders::all();
        $customers = Customers::all();
        return view('admin.order_details.show', array('orders'=>$orders, 'customers'=> $customers));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_details = Order_details::find($id);
        return view('admin.order_details.edit',array('order_details'=>$order_details));
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
        $order_details = Order_details::find($id);
        $order_details->update($request->all());
        if($order_details){
            return redirect()->route('order_details.index');
        }
        return redirect()->route('order_details.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_details = Order_details::find($id);
        $order_details->delete();
        return redirect()->route('order_details.index');
    }
}
