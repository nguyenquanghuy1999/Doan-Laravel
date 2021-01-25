@extends('layouts.admin')
@section('title', 'Danh sach product')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Đơn hàng</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa đơn hàng</div>
                <div class="panel-body">
                    <form action="{{ route('orders.update', $orders->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">

                                <div class="form-group">
                                    <label>Nhân Viên</label>
                                    <input type="text" name="user_id" value="{{ $orders->users->name }}" class="form-control">
                                </div>  

                                <div class="form-group">
                                    <label>Ngày Lâp Đơn Hàng</label>
                                    <input type="date" name="order_date" value="{{ $orders->order_date}}" class="form-control">
                                </div>  

                                <div class="form-group">
                                    <label>Địa Chỉ Giao hàng</label>
                                    <input type="text" name="address" value="{{ $orders->address}}" class="form-control">
                                </div>  

                                <div class="form-group">
                                    <label>Toàn Bộ</label>
                                    <input type="number" name="total" value="{{ $orders->total}}" class="form-control">
                                </div>  

                                <div class="form-group">
                                    <label>Ghi Chú</label>
                                    <input type="text" name="note" value="{{ $orders->note}}" class="form-control">
                                </div>  

                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('orders.index')}}" class="btn btn-danger">Hủy bỏ</a>
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
