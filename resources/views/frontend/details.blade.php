@extends('layouts.home')
@section('title','Chi tiết sản phẩm')
@section('main')
<link rel="stylesheet" href="{{asset('css/details.css')}}">
<div id="wrap-inner" class="col-md-10" > 
    <div id="row list-product-info" style="margin-top: 3em;border-style: groove;">
        <div class="clearfix"></div>
        <h3>{{$item->name}}</h3>
        <div class="row" >
            <div id="product-img" class="col-xs-12 col-sm-12 col-md-5 text-center">
                <img src="{{asset('upload/'. $item->image)}}">
            </div>
            <div id="product-details" class="col-xs-12 col-sm-12 col-md-6" style="font-weight: bold">
                <p>Giá: <span class="price">{{number_format($item->price,0,',','.')}}₫</span></p>
                <p>Bảo hành: 1 đổi 1 trong 12 tháng</p>
                <p>Phụ kiện: Dây cáp sạc, tai nghe</p>
                <p>Tình trạng: Máy mới 100%</p>
                <p>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</p>
                <p>Còn hàng: Còn {{$item->soluong}} sản phẩm</p>
                <p class="add-cart text-center"><a href="{{asset('cart/add/'.$item->id)}}">Thêm Vào Giỏ Hàng</a></p>
            </div>
        </div>
    </div>
    <div id="product-detail">
        <h3>Chi tiết sản phẩm</h3>
        <p class="text-justify"><?php echo $item->desc ?></p>
    </div>
   
    
</div>
<!-- end main -->
@endsection