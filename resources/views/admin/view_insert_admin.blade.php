@extends('layer.master')
@section('body')

<div style="padding-top: 50px;  position: relative;
  font-family: Calibri;        
  text-align: left; 
  color:#666666; 
  font-size: 15pt; 
  text-align:; 
  border-collapse: collapse; 
" >
<form method="post"	action="{{ route('process_insert_admin') }}" >
		{{ csrf_field() }} 
	<table width="60%" >
		<tr>
			<td>Tên</td>
			<td><input class="form-control" minlength="2" type="text" name="ten"> </td>
		</tr>
		<br>
		<tr>
			<td> Ngày sinh </td>
			<td> <input class="form-control" minlength="2" type="date" name="ngay_sinh" > </td>
		</tr>
		<br>
		<tr>
			<td>Giới tính</td>
			<td><input type="radio" name="gioi_tinh" value="1" checked> Nam
	    		<input type="radio" name="gioi_tinh" value="0"> Nữ
	    	</td>
		</tr>	
		<br>
		<tr>
			<td>Email</td>
			<td><input class="form-control" minlength="2" type="email" name="email"></td>
		</tr>
		<br>
		<tr>
			<td>  Mật khẩu</td>
			<td><input class="form-control" minlength="2" type="password" name="mat_khau"></td>
		</tr>
		<br>	          
	</table>
			<button class="btn btn-primary btn-xs dt-edit" style="width: 150px; height: 40px;">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
								Thêm
			</button>
</form>
</div>
@endsection