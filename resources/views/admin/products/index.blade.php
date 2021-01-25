@extends('layouts.admin')
@section('title','Products')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="col-sm-6 right" style="width: 100%;">
                                <div style="margin-top:20px; margin-bottom:20px">
                               
                                    <a href="{{ route('products.create') }}" class="btn btn-primary"> <svg class="bi bi-plus-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
                                        </svg> Thêm sản phẩm</a>
                                    
                                </div>
                                <!-- add modal -->
                                <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Danh mục</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Mô tả</th>
                                        <th>Số lượng</th>
                                        <th>Giá tiền</th>
                                        <th>Chức năng</th>
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $products)
                                    <tr style="text-align: center;">
                                        <td>{{ $products->id}}</td>
                                        <td>{{ $products->types->name}}</td>
                                        <td>{{ $products->name}}</td>
                                        <td><img src="../upload/{{ $products->image }}" width="120" height="120" /></td>
                                        <td>{{ $products->desc}}</td>
                                        <td>{{ $products->soluong}}</td>
                                        <td>{{ $products->price}}₫</td>
                                       
                                        
                                        

                                        </td>
                                
                                        <td>

                                            <div class="row action-button" style="padding-left: 10px;">
                                                <!-- edit button -->
                                                <div class="action-edit">
                                                    <a href="{{ route('products.edit', $products->id) }}" class="btn btn-warning">
                                                    <i class='fas fa-edit'></i>Edit</a>
                                                   
                                                </div>
                                                
                                                <!-- delete button -->
                                                <div class="action-delete">
                                                    <form action="{{ route('products.destroy', $products->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                     
                                                        <button class="btn btn-danger" type="submit" value="Xoá" style="margin-top: 20%;"><svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                        </svg><br>Delete</button>
                                                        
                                                      
                                                        <!-- <input class="btn btn-danger" type="submit" value="Xoá" > -->
                                                        
                                                        
                                                       
                                                    </form>
                                                </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>

@endsection
