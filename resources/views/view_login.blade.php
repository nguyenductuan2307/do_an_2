<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >
  <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<style type="text/css"> 
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  color: #FF0000;
}
.form {
  text-align: center;
  color: #FF0000;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  color: #CC0000;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #CC0000;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="login-page">
<div class="form">
	<h2> Đăng Nhập </h2>
	<form class="login-form" method="post" action="{{ route('process_login') }}" >
		{{csrf_field()}}
		@if (Session::has('error'))
      <h1>{{Session::get('error')}}</h1>
    @endif
    @if (Session::has('success'))
      <h1>{{Session::get('success')}}</h1>
    @endif
		  <input type="email" placeholder="username" name="email" />
		  <input type="password" placeholder="password" name="mat_khau" />
		  <button>login</button>		    
	</form>
</div>
</div>
</body>
</html>