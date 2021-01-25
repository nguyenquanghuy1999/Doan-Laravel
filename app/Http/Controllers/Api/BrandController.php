<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Types;
use App\Http\Controllers\Controller;
use App\Http\Resources\TypeResource;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Types::all();
        return api_success(

            array('data' => TypeResource::collection($brands))
        );
    }


    public function show($id)
    {
        $brand = Types::findOrFail($id);
        return api_success(
            array('data' => (new TypeResource($brand)))
        );
    }

    public function search(Request $request){
        $key_word = $request->input('q');
        $product = Types::where('name', 'like', '%'.$key_word.'%')->get();
        return api_success(
            array('data' => $product)
        );
    }
}
