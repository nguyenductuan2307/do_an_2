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
<button> <a href="{{ route('view_insert_san_pham') }}"> Thêm </a> </button>
<table width="100%" border="1" >
		<tr>
			<th> Mã </th>
			<th> Tên </th>
			<th> Ảnh </th>
			<th> Sửa </th>
			<th> Xóa </th>
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
			 	 <img src="{{$each->anh}}" height="100px"; width="100px" >  
			 </td>
			 <td>
			 	<a href=""> Sửa </a>
			 </td>
			 <td>
			 	<a href=""> Xóa </a>
			 </td>
		</tr>
		@endforeach
	
</table>
</div>
</body>
</html>