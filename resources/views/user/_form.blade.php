<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Pegawai <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
  {{Form::text('nama',null, ['class' => 'form-control col-md-7 col-xs-12',
  'data-parsley-required' => 'true',
  'data-parsley-required-message' => 'Nama Pegawai  Harus di isi',
  'data-parsley-trigger'          => 'change focusout',
  'placeholder'=>'Nama Pegawai'
  ])}}
</div>
</div>
<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NIP <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
  {{Form::text('nip',null, ['class' => 'form-control col-md-7 col-xs-12',
  'data-parsley-required' => 'true',
  'data-parsley-required-message' => 'NIP  Harus di isi',
  'data-parsley-trigger'          => 'change focusout',
  'placeholder'=>'NIP'
  ])}}
</div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
  <a href="{{url('tukang')}}" class="btn btn-primary">Cancel</a>
  <button id="send" type="submit" class="btn btn-success">Simpan</button>
  </div>
</div>