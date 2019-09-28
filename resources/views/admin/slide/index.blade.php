@extends('admin.app')

@section('title')
Slides
@endsection

@section('content')


	<h3 class="page-title">Slides <a href="{{ route('slides.create') }}" class="btn btn-primary pull-right"><i class="lnr lnr-plus-circle"></i> <span>Add New</span></a></h3>

<div class="content-table">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Image</th>
				<th>Title</th>
				<th>Created At</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($slides as $slide)			
			<tr>
				<td><img src="{{ $slide->image('80x60') }}" alt="{{ $slide->title }}" width="80"></td>
				<td>{{ $slide->title }}</td>
				<td>{{ $slide->created_at->format('M d, Y') }}</td>
				<td class="text-right">					
					<a class="btn btn-primary btn-sm" href="{{ route('slides.edit', $slide->id) }}"><i class="lnr lnr-pencil"></i></a>
					<div class="pull-right" style="margin-left: 10px;"> 
						<form onsubmit="return confirm('Are you sure?')" action="{{ route('slides.destroy', $slide->id) }}" method="post">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-danger btn-sm"><i class="lnr lnr-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>			
			@endforeach
		</tbody>
	</table>
</div>
@endsection