<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="100%" border="1" >
    	<tr>
    		<th> Mã </th>
    		<th> Tên  </th>
    		<th> Ngày Sinh </th>
    		<th> Giới tính </th>
    		<th> Email </th>
    		<th> Mật khẩu </th>
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
		    	{{$each->ngay_sinh}}
		    </td>
		    <td>
		    	{{$each->gioi_tinh}}
		    </td>
		    <td>
		    	{{$each->email}}
		    </td>
		    <td>
		    	{{$each->mat_khau}}
		    </td>

		</tr>
	    @endforeach
    </table>
</body>
</html>