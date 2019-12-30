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
<form method="post"	action="{{ route('process_insert_admin') }}" >
		{{ csrf_field() }} 
	<table>
		<tr>
			<td>Tên</td>
			<td><input type="text" name="ten"></td>
		</tr>
		<br>
		<tr>
			<td> Ngày sinh </td>
			<td> <input type="date" name="ngay_sinh"> </td>
		</tr>
		<br>
		<tr>
			<td>Giới tính</td>
			<td><input type="radio" name="gioi_tinh" value="1" checked> Nam<br>
	    		<input type="radio" name="gioi_tinh" value="0"> Nữ<br>	</td>
		</tr>
		<br>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<br>
		<tr>
			<td>  Mật khẩu</td>
			<td><input type="password" name="mat_khau"></td>
		</tr> 	          
	</table>
	<button> Thêm </button>
</form>
</div>
</body>
</html>