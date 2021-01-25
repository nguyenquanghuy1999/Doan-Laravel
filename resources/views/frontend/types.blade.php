@extends('layouts.home')
@section('title','Danh mục')
@section('main')

<div id="wrap-inner" class="col-md-12" >
    <div class="products">
        <h3 style="text-align: center;border-style: solid;background-color: black;padding-top: 1%;padding-bottom: 1%;">{{$typeName->name}}</h3>        
        <div class="products-list row">
            @foreach($items as $item)
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{asset('upload/'. $item->image)}}" style="height: 100px;" class="img-thumbnail"></a>
                <p><a href="#">{{ $item->name}}</a></p>
                <p class="price">{{number_format( $item->price,0,',','.')}}₫</p>
                <div class="marsk">
                    <a href="{{asset('detail/'.$item->id.'.html')}}">Xem chi tiết</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div id="pagination" style="margin-top: 2em;">
        {{$items->links()}}
    </div>
</div>
@endsection()