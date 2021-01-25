@extends('layouts.home')
@section('title','Tìm kiếm')
@section('main')
<link rel="stylesheet" href="{{asset('css/search.css')}}">
<div id="wrap-inner" class="col-md-12">
    <div class="products">
        <h3>Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h3>
        <div class="product-list row">
            @foreach($items as $products)
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{asset('upload/'. $products->image)}}" style="height: 100px;" class="img-thumbnail"></a>
                <p><a href="#">{{ $products->name}}</a></p>
                <p class="price">{{number_format( $products->price,0,',','.')}}₫</p>
                <div class="marsk">
                    <a href="{{asset('detail/'.$products->id.'.html')}}">Xem chi tiết</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @stop