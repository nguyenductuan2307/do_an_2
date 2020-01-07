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
<form action="{{ route('view_update_so_luong_kho') }}" method="get"  >
	Chọn Ngày tháng
	<input type="date" name="ngay" value="{{ $ngay }}">
	<button> Chọn </button>
</form>

<form action="{{ route('process_so_luong') }}"  method="get" >
		<input type="hidden" name="ngay" value="{{$ngay}}" >

		<table width="100%" border="1">
			<tr>
				<th> Mã </th>
				<th> Tên sản phẩm </th>
				<th> Ảnh </th>
				<th> Số lượng trước hôm nay </th>
				<th> Nhập </th>
				<th> Xuất </th>
				<th> Số lượng sau ngày hôm nay  </th>
			</tr>
			@foreach ($array_san_pham as $san_pham)
			<tr>
				<td>
					{{$san_pham->ma}} 
				</td>
				<td>
					{{$san_pham->ten}}
				</td>
				<td>
					 <img src="{{$san_pham->anh}}" height="100px"; width="100px" >  
				</td>
				<td>
					{{$san_pham->so_luong_con_lai_hom_qua}}
				</td>
				<td>
					<input type="number" name="array_nhap[{{$san_pham->ma}}]" value="{{ $array_nhap[$san_pham->ma] ?? 0 }}">
				</td>
				<td>
					<input type="number" name="array_xuat[{{$san_pham->ma}}]" value="{{ $array_xuat[$san_pham->ma] ?? 0 }}">
				</td>
				<td>
					 {{ $san_pham->so_luong_con_lai_hom_nay }}
				</td>
			</tr>
			@endforeach
		</table>
		<div style="float: right;" >
					<button> Tồn kho </button>
		</div>
</form>
</div>
</body>
</html>

