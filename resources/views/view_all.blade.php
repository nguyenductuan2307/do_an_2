<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	<a href="{{ route('view_insert') }}"> <button>Thêm</button></a>

    <table width="100%" border="1" >
    	<tr>
    		<th> Mã </th>
    		<th> Tên Nhà cung cấp </th>
    		<th> Xóa </th>
    	</tr>
    	 
	    @foreach ($array as $each)
	    <tr>
		    <td>
		    	{{$each->ma}}
		    </td>
		    <td>
		    	{{$each->ten_nha_cung_cap}}
		    </td>
		    <td> <a href="{{ route('delete',['ma' => $each-> ma]) }}"> Xóa </a> </td>
		</tr>
	    @endforeach
    </table>
</body>
</html>