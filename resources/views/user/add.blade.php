@extends('layouts.parent')
@section('custom_css')
     <link href="{{asset('css/parsley.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Data Tukang')
@section('page_title','Data Tukang')
@section('page_child_title','Daftar Data Tukang')
@section('content')       
                    
  {{Form::open(['url'=>'pegawai','method' => 'post','data-parsley-validate'=>'parsley','class'=>'form-horizontal form-label-left','files'=>true])}}
      @include('user._form')
   {{Form::close()}}
            
 @endsection 
 @section('custom_js')
  <script src="{{asset('js/parsley.config.js')}}"></script>
  <script src="{{asset('js/parsley.min.js')}}"></script>
 @endsection