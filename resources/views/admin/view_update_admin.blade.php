@extends('layer.master')
@section('body')
<div style="padding-top: 100px;  " >
<form method="post"	action="{{ route('process_update_admin',['ma' => $each->ma]) }}" >
		{{ csrf_field() }} 
	<table width="60%">
		<tr>
			<td>Tên</td>
			<td><input class="form-control" minlength="2" type="text" name="ten" value="{{$each->ten}}" ></td>
		</tr>
		<br>
		<tr>
			<td> Ngày sinh </td>
			<td> <input class="form-control" minlength="2" type="date" name="ngay_sinh" value="{{$each->ngay_sinh}}" > </td>
		</tr>
		<br>
		<tr>
			<td>Giới tính</td>
			<td>
				<input type="radio" name="gioi_tinh" value="1" 
				@if ($each->gioi_tinh==1)
					checked
				@endif
				>
				Nam 
	    		<input type="radio" name="gioi_tinh" value="0"
				@if ($each->gioi_tinh==0)
					checked
				@endif
	    		> Nữ 	
	    	</td>
		</tr>
		<br>
		<tr>
			<td>Email</td>
			<td><input class="form-control" minlength="2" type="email" name="email" value="{{$each->email}}" ></td>
		</tr>
		<br>
		<tr>
			<td>  Mật khẩu</td>
			<td><input class="form-control" minlength="2" type="password" name="mat_khau" value="{{$each->mat_khau}}" ></td>
		</tr> 	          
	</table>
	<button  class="btn btn-primary btn-xs dt-edit" style="width: 150px; height: 40px;">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
								Sửa
	</button>
</form>
</div>
@endsection