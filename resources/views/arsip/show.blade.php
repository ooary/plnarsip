@extends('layouts.parent')
@section('custom_css')
<link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Data Arsip ' .$user->nama)
@section('page_title','Data Arsip '.$user->nama)
@section('page_child_title','Daftar Data Arsip')
@section('content')
<ul class="breadcrumb">
  <li ><a href="{{url("arsip")}}" class="label label-primary">Arsip</a></li>
  <li class="active" >{{$user->nama}}</li>
</ul>
  @include('arsip.section._sertifikat')
  @include('arsip.section._mcu')
  @include('arsip.section._ads')
  @include('arsip.section._skpp')
  @include('arsip.section._sppd')
  @include('arsip.section._sic')




@endsection
@section('custom_js')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap.js')}}"></script>
@endsection