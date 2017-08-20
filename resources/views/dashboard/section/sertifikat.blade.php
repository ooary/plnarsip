 <div class="x_title">
    <h2 style="font-weight: bold; ">SERTIFIKAT</h2>
    <div class="clearfix"></div>
  </div>
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
           <a href="arsipku/sertifikat/{{$s->nama_sertifikat}}" class="btn btn-warning fa fa-download"></a>
              <button class="fa fa-trash btn btn-danger"></button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>