<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Types;

class FrontendController extends Controller
{
    public function Home(){
        $data['products']= Products::where('soluong',20)->take(20)->get();
        $data['news']= Products::orderBy('id', 'desc',)->take(20)->get();
        return view('frontend.welcome',$data);
    }

    public function ProductDetail($id){
        $data['item'] = Products::find($id);
        return view('frontend.details', $data);
    }

    // types là danh mục sản phẩm
    public function Types ($id){
        $data['typeName'] = Types::find($id);
        $data['items'] = Products::where('type_id', $id)->paginate(4);
        return view('frontend.types', $data);
    }

    public function Search(Request $request){
        $result = $request->result;
        $result = str_replace(' ', '%', $result); //bỏ khoảng trắng
        $data['items'] = Products::where('name','like','%'.$result.'%')->get();
        $data['keyword'] = $result;
        return view('frontend.search',$data);
    }
}
