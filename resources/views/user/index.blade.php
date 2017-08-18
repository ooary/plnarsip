@extends('layouts.parent')
@section('custom_css')
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('page_header_title','Data Pegawai')
@section('page_title','Data Pegawai')
@section('page_child_title','Daftar Data Pegawai')
@section('page_button')
   <a href="{{url('pegawai/tambah')}}" class="btn btn-primary fa fa-plus pull-right"> Tambah Data Pegawai</a>
@endsection
@section('content')				
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
              {{Form::model($d,['route'=>['user.destroy',$d],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
              <a href="pegawai/edit/{{$d->id}}" class="btn btn-warning fa fa-pencil" style="margin: 10px;"></a>

              <button class="fa fa-trash btn btn-danger"></button>
              {{Form::close()}}
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
