@extends('layouts.parent')
@section('custom_css')
<link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Data Arsip')
@section('page_title','Data Arsip')
@section('page_child_title','Daftar Data Sertifikat')
@section('content')
   <a href="{{url('arsipku/sertifikat')}}" class="btn btn-primary fa fa-plus pull-right">  Upload Sertifikat</a>
<table  class="table table-striped table-bordered dt-responsive nowrap datatable-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Sertifikat</th>
      <th>Tanggal Upload</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php($no=1)
    @foreach($sertifikat as $s)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$s->nama_sertifikat}}</td>
      <td>{{$s->created_at}}</td>
      <td>
            {{Form::model($s,['route'=>['sertifikat.destroy',$s],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
               <a href="arsipku/sertifikat/{{$s->nama_sertifikat}}" class="btn btn-warning fa fa-download"></a>
              <button class="fa fa-trash btn btn-danger"></button>
            {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  {{--  <div class="x_title">
    <h2 style="font-weight: bold; ">Daftar Surat MCU</h2>
  
    <div class="clearfix"></div>
  </div>
   <a href="{{url('arsipku/tambah')}}" class="btn btn-primary fa fa-plus pull-right"> Upload SK</a>
<table  class="table table-striped table-bordered dt-responsive nowrap datatable-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Sertifikat</th>
      <th>Tanggal Upload</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php($no=1)
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
  </tbody>
</table> --}}

@endsection
@section('custom_js')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap.js')}}"></script>
@endsection