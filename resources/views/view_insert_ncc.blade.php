<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post"	action="{{ route('process_insert_ncc') }}" >
		{{ csrf_field() }} 
	Tên
	<input type="text" name="ten">
	<br>
	<button> Thêm </button>
	</form>
	  

</body>
</html>