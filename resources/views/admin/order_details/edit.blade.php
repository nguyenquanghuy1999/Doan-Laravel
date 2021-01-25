@extends('layouts.admin')
@section('title', 'Danh sach product')
@section('main')
<base href="../../">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Đơn đặt hàng</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa đơn hàng</div>
                <div class="panel-body">
                    <form action="{{ route('order_details.update', $order_details->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                  
                                </div>
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" value="{{ $order_details->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá tiền</label>
                                    <input require type="text" name="price" value="{{ $order_details->price }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input required type="number" name="quantity" value="{{ $order_details->quantity }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Toàn bộ</label>
                                    <input required type="number" name="total" value="{{ $order_details->total }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Order_ID</label>
                                    <input required type="number" name="order_id" value="{{ $order_details->order_id }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product_ID</label>
                                    <input required type="number" name="product_id" value="{{ $order_details->product_id }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer_ID</label>
                                    <input required type="number" name="customer_id" value="{{ $order_details->customer_id }}" class="form-control">
                                </div>
                               
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('order_details.index')}}" class="btn btn-danger">Hủy bỏ</a>
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