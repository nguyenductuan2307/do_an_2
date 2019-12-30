<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
<div>	
		@include('view_menu')
</div>

<div style="padding-top: 100px;  " >
		<a href="{{ route('view_insert_admin') }}"> <button>Thêm</button></a>
		<table width="100%" border="1" >
		    	<tr>
		    		<th> Mã </th>
		    		<th> Tên  </th>
		    		<th> Ngày Sinh </th>
		    		<th> Giới tính </th>
		    		<th> Email </th>
		    		<th> Mật khẩu </th>
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
				    <td>
				    	<a href="{{ route('view_update_admin',['ma' => $each-> ma]) }}"> Sửa </a>
				    </td>
				    <td>
				    	<a href="{{ route('delete_admin',['ma' => $each-> ma]) }}"> Xóa </a>
				    </td>

				</tr>
			    @endforeach
		    </table>
</div>
</body>
</html>