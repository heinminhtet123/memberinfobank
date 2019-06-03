@extends('layoutView')
@section('content')
	<h1 class="text-center m-5">MIB Result List</h1>
<div class="form-group mt-5 mb-2 sticky-top">
	<a href="/" class="btn custom-button" ><span class="fa fa-plus"></span> Add Building</a>
</div>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
      {{ session()->get('success') }}  
    </div><br />
  @endif
</div>
<div class="uper">
  @if(session()->get('delete'))
    <div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
      {{ session()->get('delete') }}  
    </div><br />
  @endif
</div>

<table id="myTable" class="table table-borderless table-hover table-striped shadow">
	<thead>
		<tr class="font-weight-bold">
			<th><input type="checkbox"></th>
			<th>Building Name</th>
			<th>Remark</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($buildings as $building)
		<tr>
			<td><input type="checkbox"></td>
			<td>{{$building->buildingDesc}}</td>
			<td>{{$building->remark}}</td>
			<td><a href="" class="btn bg-secondary fa fa-eye text-white"></a></td>
			<td>
				<a href="{{route('buildingCN.edit',$building->buildingId)}}" class="btn btn-primary fa fa-edit"></a>
			</td>
			<td>
				<form action="{{route('buildingCN.destroy',$building->buildingId)}}" method="post">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger fa fa-trash" type="submit"></button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{--<div class="container">--}}
{{--	<ul class="pagination justify-content-end mt-5">--}}
{{--		<li class="page-item"><a class="page-link fa fa-angle-double-left" href="javascript:void(0);"></a></li>--}}
{{--		<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>--}}
{{--		<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>--}}
{{--		<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>--}}
{{--		<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>--}}
{{--		<li class="page-item"><a class="page-link fa fa-angle-double-right" href="javascript:void(0);"></a></li>--}}
{{--	</ul>--}}
{{--</div>--}}
	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script>


@endsection