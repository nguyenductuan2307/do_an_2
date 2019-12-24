<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1> Đăng Nhập </h1>
		<form method="post" action="{{ route('process_login') }}" >
			{{csrf_field()}}
			@if (Session::has('error'))
                <h1>{{Session::get('error')}}</h1>
            @endif
            @if (Session::has('success'))
                <h1>{{Session::get('success')}}</h1>
            @endif
			<table>
				 
				<tr>
					<td> Email </td>
					<td> <input type="email" name="email"> </td>
				</tr>
				<br>
				<tr>
					<td> Password </td>
					<td> <input type="password" name="mat_khau"> </td>
				</tr>
				<br>
				<button> Đăng nhập </button>
			</table>
		</form>
	</center>
</body>
</html>