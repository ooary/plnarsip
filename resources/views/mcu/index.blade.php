@extends('layouts.parent')
@section('custom_css')
<link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Data Arsip')
@section('page_title','Data Arsip')
@section('page_child_title','Daftar Data mcu')
@section('content')
<table  class="table table-striped table-bordered dt-responsive nowrap datatable-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama mcu</th>
      <th>Tanggal Upload</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php($no=1)
    @foreach($mcu as $s)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$s->nama_mcu}}</td>
      <td>{{$s->created_at}}</td>
      <td>
            <a href="med/{{$s->nama_mcu}}" class="btn btn-warning fa fa-download"></a>
             
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('custom_js')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap.js')}}"></script>
@endsection