@extends('layouts.admin')
@section('title', 'Danh sach product')
@section('main')
<base href="../../">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Loại sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa loại sản phẩm</div>
                <div class="panel-body">
                    <form action="{{ route('types.update', $types->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                               
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" value="{{ $types->name }}" class="form-control">
                                </div>
 
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('types.index')}}" class="btn btn-danger">Hủy bỏ</a>
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
