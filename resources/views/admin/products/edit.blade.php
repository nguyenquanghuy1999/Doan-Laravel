@extends('layouts.admin')
@section('title', 'Danh sach product')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <form action="{{ route('products.update', $products->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                             
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" value="{{ $products->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label><br>
                                    <img src="{{asset('../upload/'.$products->image)}}" width="120" height="120" />
                                    <input require type="file" name="image" value="{{ $products->image }}" class="form-control" style="margin-top: 2%;">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea required name="desc">{{$products->desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input required type="number" name="soluong" value="{{ $products->soluong }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input required type="number" name="price" value="{{ $products->price }}" class="form-control">
                                </div>
                              
                                <div class="form-group">
                                    <label>Danh mục</label>
                                   <select required name="type_id" class="form-control" >
                                    <option value="1">Macbook</option>
                                    <option value="2">Iphone</option>
                                    <option value="3">Ipad</option>
                                    <option value="4">Watch</option>
                                    </select>
                                </div>
                               
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        </>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection
