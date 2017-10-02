 <div class="x_title">
    <h2 style="font-weight: bold; ">Daftar ADS</h2>
  
    <div class="clearfix"></div>
  </div>
   <a  href="{{url('arsip/show')}}/{{$user->id_user}}/ads" class="btn btn-warning fa fa-plus pull-right"> Upload ADS</a>
<table  class="table table-striped table-bordered dt-responsive nowrap datatable-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama ADS</th>
      <th>Tanggal Upload</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php($no=1)
        @foreach($ads as $s)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$s->nama_ads}}</td>
      <td>{{$s->created_at}}</td>
      <td>
            {{Form::model($s,['route'=>['arsip.destroyads',$s],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
               <a href="{{url('arsip/download/ads')}}/{{$s->nama_mcu}}" class="btn btn-warning fa fa-download"></a>
              <button class="fa fa-trash btn btn-danger"></button>
            {{Form::close()}}
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
