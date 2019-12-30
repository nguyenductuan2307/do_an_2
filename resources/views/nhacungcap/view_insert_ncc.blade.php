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
	<form method="post"	action="{{ route('process_insert_ncc') }}" >
		{{ csrf_field() }} 
	Tên
	<input type="text" name="ten">
	<br>
	<button> Thêm </button>
	</form>
</div>	  

</body>
</html>