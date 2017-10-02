 <div class="x_title">
    <h2 style="font-weight: bold; ">Daftar Sertifikat</h2>
  
    <div class="clearfix"></div>
  </div>
 <a href="{{url('arsip/show')}}/{{$user->id_user}}/sertifikat" class="btn btn-primary fa fa-plus pull-right">  Upload Sertifikat</a>
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
            {{Form::model($s,['route'=>['arsip.destroysertifikat',$s],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
               <a href="{{url('arsip/download/sertifikat')}}/{{$s->nama_sertifikat}}" class="btn btn-warning fa fa-download"></a>
              <button class="fa fa-trash btn btn-danger"></button>
            {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>