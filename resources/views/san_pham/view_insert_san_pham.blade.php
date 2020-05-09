@extends('layer.master')
@section('body')
<div style="padding-top: 100px;  " >
	<form method="post"	action="{{ route('process_insert_san_pham') }}" >
				{{ csrf_field() }} 
		<table width="60%" >
			<tr>
				<td>Tên</td>
				<td><input class="form-control" minlength="2" type="text" name="ten"></tr>
			</tr>
			<br>
			<tr>
				<td>Ảnh</td>
				<td><input class="form-control" minlength="2"  type="text" name="anh"></td>
			</tr>
			<tr>
				<td>Số lượng nhập</td>
				<td><input class="form-control" minlength="2"  type="number" name="nhap"></td>
			</tr>
			<tr>
				<td>Ngày</td>
				<td><input class="form-control"  type="date" name="ngay"></td>
			</tr>
			<br>
		</table>
			<button class="btn btn-primary btn-xs dt-edit" style="width: 150px; height: 40px;">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
								Thêm
			</button>

	</form>
</div>	  
@endsection