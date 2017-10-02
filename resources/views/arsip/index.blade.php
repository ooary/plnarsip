@extends('layouts.parent')
@section('custom_css')
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Data Arsip Pegawai')
@section('page_title','Data Arsip Pegawai')
@section('page_child_title','Daftar Data Arsip Pegawai')
@section('content')				
    <table class="table table-striped table-bordered dt-responsive nowrap datatable-responsive" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pegawai</th>
          <th>NIP</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      @php($no=1)
      @foreach($data as $d)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$d->nama}}</td>
          <td>{{$d->nip}}</td>
          <td>
              <a href="arsip/show/{{$d->id_user}}" class="btn btn-success fa fa-eye " style="margin: 10px;"> Lihat Arsip</a>
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
