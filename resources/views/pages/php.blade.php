@extends('layout.master')
@section('NoiDung')
<h2>PHP</h2>
<div style="color: red">
<?php $khoahoc1= array('PHP','IOS','ASP','Android');?>
@forelse($khoahoc1 as $value)
{{$value}}
@empty
{{"Mang rong"}}
@endforelse
</div>

<!-- @if($khoahoc !="")
{!! $khoahoc !!}
@else
{{"Khong co khoa hoc"}}
@endif -->
<br>
<!-- @for($i=1;$i<=10;$i++)
	{{$i." "}}
@endFor -->
@endsection