@extends('layouts.admin')
@section('title','Add Product')
<base href="../">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Khách hàng</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Thêm khách hàng</div>
				<div class="panel-body">
					<form method="post" action="{{ route('customers.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Tên khách hàng</label>
									<input required="abc" type="text" name="name" class="form-control">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name')}}</strong></br>
									</span>
									@endif
								</div>
								<div class="form-group">
									<label>Số điện thoại</label>
									<input require type="number" name="phonenumber" class="form-control">
							
								</div>
								
								<div class="form-group">
									<label>Địa chỉ</label>
									<input required type="text" name="address" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input required type="text" name="email" class="form-control">
								</div>
							
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('customers.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>