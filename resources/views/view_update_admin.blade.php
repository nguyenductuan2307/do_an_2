<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>	
		@include('view_menu')
</div>
<div style="padding-top: 100px;  " >
<form method="post"	action="{{ route('process_update_admin',['ma' => $each->ma]) }}" >
		{{ csrf_field() }} 
	<table>
		<tr>
			<td>Tên</td>
			<td><input type="text" name="ten" value="{{$each->ten}}" ></td>
		</tr>
		<br>
		<tr>
			<td> Ngày sinh </td>
			<td> <input type="date" name="ngay_sinh" value="{{$each->ngay_sinh}}" > </td>
		</tr>
		<br>
		<tr>
			<td>Giới tính</td>
			<td>
				<input type="radio" name="gioi_tinh" value="1" value="{{$each->gioi_tinh}}" > Nam<br>
	    		<input type="radio" name="gioi_tinh" value="0" value="{{$each->gioi_tinh}}" > Nữ<br>	
	    	</td>
		</tr>
		<br>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" value="{{$each->email}}" ></td>
		</tr>
		<br>
		<tr>
			<td>  Mật khẩu</td>
			<td><input type="password" name="mat_khau" value="{{$each->mat_khau}}" ></td>
		</tr> 	          
	</table>
	<button> Sửa </button>
</form>
</div>
</body>
</html>