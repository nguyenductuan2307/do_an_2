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
			<form method="post"	action="{{ route('process_insert_san_pham') }}" >
				{{ csrf_field() }} 
			Tên
			<input type="text" name="ten">
			<br>
			Ảnh
			<input type="text" name="anh">
			<br>
			<button> Thêm </button>
			</form>
</div>	  
</body>
</html>