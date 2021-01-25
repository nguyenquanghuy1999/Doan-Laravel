@extends('layouts.home')
@section('title','Apple Store')
@section('main')
    <div id="wrap-inner">
        <div class="products">
            <h3 style="text-align: center;border-style: solid;background-color: black;padding-top: 1%;padding-bottom: 1%;">Các Sản Phẩm Của Chúng Tôi</h3>
            <div class="product-list row">
                @foreach($news as $products)
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
        
        
@endsection