@extends('layouts.admin')
@section('title','Add Users')

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
				<div class="panel-heading">Thêm loại sản phẩm</div>
				<div class="panel-body">
					<form method="post" action="{{ route('types.index') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Tên loại sản phẩm</label>
									<input required="abc" type="text" name="name" class="form-control">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name')}}</strong></br>
									</span>
									@endif
								</div>
							
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('types.index')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>