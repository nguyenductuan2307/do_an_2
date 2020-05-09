@extends('layer.master')
@section('body')
<div style="padding-top: 100px;  " >
			<form method="post"	action="{{ route('process_update_san_pham',['ma' => $each->ma]) }} " >
				{{ csrf_field() }} 
			Tên
			<input type="text" name="ten" value="{{$each->ten}}" >
			<br>
			Ảnh
			<input type="text" name="anh" value="{{$each->anh}}" >
			<br>
			<button> Sửa </button>
			</form>
</div>	  
</body>
</html>
@endsection