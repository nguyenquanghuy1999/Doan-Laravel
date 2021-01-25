@extends('layouts.admin')
@section('title','Add Product')
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
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					<form method="post" action="{{ route('products.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Danh Mục</label>
									<select type="number" name="type_id" class="form-control">
										@foreach ($types as $types)
										<option value="{{ $types->id}}">{{ $types->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input  type="text" name="name" class="form-control">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('name')}}</strong></br>
									</span>
									@endif
								</div>
								<div class="form-group">
									<label>Ảnh sản phẩm</label>
										<input type="file" name="image" required="true" id="task-name" class="form-control">
									</div>
								<div class="form-group">
									<label>Giá sản phẩm</label>
									<input  type="number" name="price" class="form-control">
									@if ($errors->has('price'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('price')}}</strong></br>
									</span>
									@endif
								</div>
								<div class="form-group">
									<label>Số lượng</label>
									<input  type="number" name="soluong" class="form-control">
									@if ($errors->has('soluong'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('soluong')}}</strong></br>
									</span>
									@endif
								</div>
								<div class="form-group">
									<label>Miêu tả</label><br>
									<textarea  name="desc" ></textarea>
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection