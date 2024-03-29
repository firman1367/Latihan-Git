@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('crud.update', $cruds->id)}}" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$cruds->nama}}">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
							<input type="text" name="phone" class="form-control" placeholder="Nomor Handphone" value="{{$cruds->phone}}">
							{!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
