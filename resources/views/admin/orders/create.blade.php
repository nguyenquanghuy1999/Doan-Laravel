@extends('layouts.admin')
@section('title','Add Users')

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
				<div class="panel-heading">Thêm đơn đặt hàng</div>
				<div class="panel-body">
					<form method="post" action="{{ route('orders.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>ID Nhân viên</label>
									<input required="abc" type="text" name="user_id" class="form-control" >
									@if ($errors->has('user_id'))
									<span class="help-block">
										<strong>{{ $errors->first('user_id')}}</strong></br>
									</span>
									@endif
								</div>
	
								<div class="form-group">
									<label>Ngày lập đơn hàng</label>
									<input name="order_date" class="form-control">
									@if ($errors->has('order_date'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('order_date')}}</strong></br>
									</span>
									@endif
								</div>

								<div class="form-group">
									<label>Địa chỉ người đặt</label>
									<input  type="text" name="address" class="form-control">
									@if ($errors->has('address'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('address')}}</strong></br>
									</span>
									@endif
								</div>

								<div class="form-group">
									<label>Tổng tiền</label>
									<input  type="number" name="total" class="form-control">
									@if ($errors->has('total'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('total')}}</strong></br>
									</span>
									@endif
								</div>

								
								<div class="form-group">
									<label>Ghi chú </label>
									<input  type="text" name="note" class="form-control">
									@if ($errors->has('note'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('note')}}</strong></br>
									</span>
									@endif
								</div>

								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('orders.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>