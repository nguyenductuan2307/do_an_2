@extends('layer.master')
@section('body')
<div style="padding-top: 100px; color:#666666; " >
	<a href="{{ route('view_insert_admin') }}"> 
		<button type="button" class="btn btn-primary btn-xs dt-edit" style="width: 150px; height: 40px;">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Thêm </button>
	</a>
	<table width="100%">
	<tr>
		<th> Mã </th>
		<th> Tên Nhân Viên   </th>
		<th> Ngày Sinh </th>
		<th> Giới tính </th>
		<th> Email </th>
		<th> Mật khẩu </th>
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
				    	{{$each->ngay_sinh}}
				    </td>
				    <td>
				    	@if ($each->gioi_tinh==1)
				    		Nam
				    	@else
				    		Nữ
				    	@endif
				    
				    </td>
				    <td>
				    	{{$each->email}}
				    </td>
				    <td>
				    	{{$each->mat_khau}}
				    </td>
				    <td>
				    	<a href="{{ route('view_update_admin',['ma' => $each-> ma]) }}"> 
				    		<button type="button" class="btn btn-primary btn-xs dt-edit" style="width:100px;">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Sửa
							</button>
						</a>
				    </td>
				    <td>
				    	<a href="{{ route('delete_admin',['ma' => $each-> ma]) }}">
				    		<button type="button" class="btn btn-danger btn-xs dt-delete" style="width:100px;">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Xóa
							</button>
				    	</a>
				    </td>

				</tr>
		    @endforeach
	</table>
</div>
@endsection
		    	 