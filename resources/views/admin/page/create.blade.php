@extends('admin.app')

@section('title')
Add Page
@endsection

@section('content')

<div class="content-form">
	<form class="form-horizontal" action="{{ route('pages.store') }}" accept-charset="utf-8" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}

		@include('admin.page.form')
		<div class="form-group">
			<label class="col-sm-2 control-label">&nbsp;</label>
			<div class="col-sm-10"><input class="btn btn-success" name="submit" value="Save" type="submit" id="form_submit"></div>
		</div>
	</form>
</div>
@endsection