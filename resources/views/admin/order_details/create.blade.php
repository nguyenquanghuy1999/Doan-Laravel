@extends('layouts.admin')
@section('title','Add Product')
<base href="../">
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
				<div class="panel-heading">Thêm đơn hàng</div>
				<div class="panel-body">
					<form method="post" action="{{ route('order_details.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Tên đơn hàng</label>
									<input required="abc" type="text" name="name" class="form-control">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name')}}</strong></br>
									</span>
									@endif
								</div>
								<div class="form-group">
									<label>Số lượng</label>
									<!-- <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
										<img id="avatar" class="thumbnail" width="300px" src="img/ip11.jpg"> -->
									<input require type="text" name="quantity" class="form-control">
							
								</div>
								
								<div class="form-group">
									<label>Giá tiền</label>
									<input required type="number" name="price" class="form-control">
								</div>
								<div class="form-group">
									<label>Toàn bộ là</label>
									<input required type="number" name="total" class="form-control">
								</div>
								<div class="form-group">
									<label>Order_id</label>
									<input required type="nuber" name="order_id" class="form-control">
								</div>
								<div class="form-group">
									<label>Product_id</label>
									<input required type="number" name="product_id" class="form-control">
								</div>		
								<div class="form-group">
									<label>Customer_id</label>
									<input required type="number" name="customer_id" class="form-control">
								</div>		
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('order_details.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>