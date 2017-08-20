@extends('layouts.parent')
@section('page_header_title','Dashboard')
@section('custom_css')

{{-- {!! Charts::assets() !!} --}}
@endsection
@section('page_title','Dashboard')
@section('content')
<div class="row tile_count">
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah Sertifikat</span>
		<div class="count">{{$sertifikat->count()}}</div>
	</div>
	
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah Surat Keterangan</span>
		<div class="count green">0</div>
	</div>
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah MCU</span>
		<div class="count">0</div>
	</div>
	
</div>
<center>
{{-- {!! $chart->render() !!} --}}
</center>

@include('dashboard.section.sertifikat')

@endsection
@section('custom_js')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap.js')}}"></script>
@endsection