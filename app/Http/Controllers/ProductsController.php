<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Types;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\DB as FacadesDB;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $types = Types::all();
        return view('admin.products.index', array('products'=> $products, 'types'=> $types));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $types = Types::all();
        return view('admin.products.create', array('types' => $types));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {   
        $products =Products::create($request->all());
        if($products){
            return redirect()->route('products.index');
        }
        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::find($id);
        return view('admin.products.show', array('products'=> $products));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $types = Types::all();
        $products = Products::find($id);
        return view('admin.products.edit', array('products'=>$products, 'types' => $types));
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
        $products = Products::find($id);
        $products->update($request->all());
        if($products){
            return redirect()->route('products.index');
        }
        return redirect()->route('admin.products.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
