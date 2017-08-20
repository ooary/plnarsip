@extends('layouts.parent')
@section('custom_css')
     <link href="{{asset('css/dropzone.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Upload Sertifikat')
@section('page_title','Upload Sertifikat')
@section('page_child_title','Klik atau Drag and Drop Sertifikat ')
@section('content')       

<form action="{{url('arsipku/sertifikat')}}" class="dropzone" id="myDropzoneSk">
  {{csrf_field()}}
  {{-- <input type="hidden" name="id" value="{{$proyek->id_proyek}}"> --}}
</form>
<br>
  <a href="{{url('arsipku')}}" class="btn btn-success btn-large ">Kembali</a>
      
 @endsection 
 @section('custom_js')
  <script src="{{asset('js/dropzone.min.js')}}"></script>
  <script src="{{asset('js/uploadconf.js')}}"></script>

 @endsection