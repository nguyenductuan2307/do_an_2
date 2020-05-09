@extends('layer.master')
@section('body')


<div style="padding-top: 200px" >
	<form action="{{ route('view_update_so_luong_kho') }}" method="get"  >
	Chọn Ngày tháng
	<input type="date" name="ngay">
	<button> Chọn </button>
	</form>
</div>

@endsection