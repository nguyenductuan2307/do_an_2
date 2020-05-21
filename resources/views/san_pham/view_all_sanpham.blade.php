@extends('layer.master')
@section('body')
<div style="padding-top: 100px;  " >
    <a href="{{ route('view_insert_san_pham') }}"> 
    	<button type="button" class="btn btn-primary btn-xs dt-edit" style="width: 150px; height: 40px;">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Thêm </button>
	</a>
	@if (Session::has('success'))
		{{ 'Xoa thanh cong' }}
	@endif
	@if (Session::has('error'))
		{{ 'Xoa that bai' }}
	@endif
<table width="100%" >
		<tr>
			<th> Mã </th>
			<th> Tên </th>
			<th> Ảnh </th>
			<th style="text-align:center;width:100px;">Sửa</th>
			<th style="text-align:center;width:100px;">Xóa</th>
		</tr>
		@foreach ($array as $each)
	 	<tr>
			 <td>
				   {{$each->ma}}
			 </td>
			 <td>
				   {{$each->ten}}
			 </td>
			 <td>
			 	 <img src="{{$each->anh}}" height="100px"; width="100px" >  
			 </td>
			 <td>
			 	<a href="{{ route('process_update_san_pham',['ma' => $each-> ma]) }}">
			 		<button class="btn btn-primary btn-xs dt-edit" style="width:100px; height: 30px">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Sửa
					</button>
			 	</a>
			 </td>
			 <td>
			 	<a href="{{ route('delete_sanpham',['ma' => $each-> ma]) }}">
			 		<button class="btn btn-danger btn-xs dt-delete" style="width:100px; height: 30px">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Xóa
					</button>
			 	</a>
			 </td>
		</tr>
		@endforeach
	
</table>
</div>
@endsection