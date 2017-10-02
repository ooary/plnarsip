@extends('layouts.parent')
@section('custom_css')
     <link href="{{asset('css/dropzone.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Upload MCU')
@section('page_title','Upload MCU')
@section('page_child_title','Klik atau Drag and Drop MCU ')
@section('content')       
<ul class="breadcrumb">
<li ><a href="{{url("arsip")}}" class="label label-primary">Arsip</a></li>
  <li ><a href="{{url("arsip")}}/show/{{$id}}" class="label label-warning">Daftar Arsip </a></li>
  <li class="active" >{{$user->nama}}</li>

</ul>

<form action="{{url('arsip/mcu')}}" class="dropzone" id="myDropzoneSk">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$id}}">
</form>
<br>
  <a href="{{url('arsip')}}/show/{{$id}}" class="btn btn-success btn-large ">Kembali</a>
      
 @endsection 
 @section('custom_js')
  <script src="{{asset('js/dropzone.min.js')}}"></script>
  <script src="{{asset('js/uploadconf.js')}}"></script>

 @endsection