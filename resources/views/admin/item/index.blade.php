@extends('admin.app')

@section('title')
Items
@endsection

@section('content')

<h1>Items <a href="{{ route('items.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> <span>Add New</span></a></h1>

<div class="panel">
	<div class="panel-heading">
		<form class="form-horizontal">
		  <div class="form-group">
			    <label for="" class="col-sm-1 control-label">Filter</label>
				<div class="col-sm-3">
					<select name="category" class="form-control" onchange="this.form.submit()">
						<option value="0">Select Category</option>
						@foreach ($categories as $category)
							<option value="{{$category->id}}">{{$category->title}}</option>
						@endforeach
					</select>				
				</div>

				<label for="" class="col-sm-2 col-sm-offset-2 control-label">Search</label>
				<div class="col-sm-4">
					<input name="keyword" type="text" class="form-control" placeholder="">
				</div>
			</div>
		</form>
	</div>
	<div class="panel-body">		
		<table class="table">
			<thead>
				<tr>
					<th>Category</th>
					<th>Title</th>
					<th>Created At</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="sortable">
				@foreach ($items as $item)
				<tr id="{{$item->id}}">
					<td>{{ $item->category_title }}</td>
					<td>{{ $item->title }}</td>
					<td>{{ $item->created_at->format('M d, Y') }}</td>
					<td class="text-right">

							<a class="btn btn-primary btn-sm" href="{{ route('items.edit', $item->id) }}"><i class="fa fa-edit"></i></a>

							<div class="pull-right" style="margin-left: 10px;">
								<form onsubmit="return confirm('Are you sure?')" action="{{ route('items.destroy', $item->id) }}" method="post">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
								</form>
							</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel-footer">
		{!!$items->appends(request()->all())->links()!!}		
	</div>
</div>
@endsection

@section('script')

@if (request()->category)
<script>
	$( function() {
		$( "#sortable" ).sortable({
			update: function (event, ui) {
				var data = $(this).sortable('toArray');
				url = "{{ route('items.order') }}";
				$.ajax(url, {
					data: {
						'_token': "{{ csrf_token() }}",
						'data':data
					},
					type: 'POST',
				});
			}
		});
	} );
</script>
@endif
@endsection

