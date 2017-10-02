@extends('layouts.parent')
@section('page_header_title','Dashboard')
@section('custom_css')

{{-- {!! Charts::assets() !!} --}}
@endsection
@section('page_title','Dashboard')
@section('content')
<div class="alert alert-info alert-dismissible fade in" role="alert">
                 
                    <strong>Selamat Datang!</strong> {{Auth::user()->nama}}
</div>
<div class="row tile_count">
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah Sertifikat</span>
		<div class="count">{{$sertifikat->count()}}</div>
	</div>
	
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah SKPP dan SK</span>
		<div class="count green">{{$skpp->count()}}</div>
	</div>
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah MCU</span>
		<div class="count">{{$mcu->count()}}</div>
	</div>
		<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah SPPD</span>
		<div class="count">{{$sppd->count()}}</div>
	</div>
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah ADS</span>
		<div class="count">{{$ads->count()}}</div>
	</div>
	<div class="col-lg-4 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Jumlah SIC</span>
		<div class="count">{{$ads->count()}}</div>
	</div>

	
</div>
<center>
{{-- {!! $chart->render() !!} --}}
</center>

@endsection
@section('custom_js')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap.js')}}"></script>
@endsection