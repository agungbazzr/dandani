@extends('layouts.app-master')


@section('title', 'Pemesanan | Sistem Informasi Akademik')
@section('link')
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
@endsection
@section('content')
 @if(session('error'))
  <div class="alert alert-error">
   {{ session('error') }}
 </div>
 @endif

 @if(count($errors) > 0)
 <div class="alert alert-danger">
   <strong>info !!</strong>
   <br>
   <ul>
     @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
   </ul>
 </div>
 @endif
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Pemesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('pemesanan.index') }}">Pemesanan</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Pemesanan</h3>

          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('pemesanan.store') }}">
            {{ csrf_field() }}
            
			  <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
	            <label for="id" class="control-label">Id</label>

	            <div>
	              <input id="id" maxlength="20 " type="text" class="form-control " name="id" value="{{ old('id') }}" required autofocus autocomplete="off">

	              @if ($errors->has('id'))
	              <span class="help-block">
	                <strong>{{ $errors->first('id') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('id_pelanggan') ? ' has-error' : '' }}">
	            <label for="id_pelanggan" class="control-label">Id Pelanggan</label>

	            <div>
	              <input id="id_pelanggan" maxlength="255" type="text" class="form-control " name="id_pelanggan" value="{{ old('id_pelanggan') }}" required autofocus autocomplete="off">

	              @if ($errors->has('id_pelanggan'))
	              <span class="help-block">
	                <strong>{{ $errors->first('id_pelanggan') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('id_tukang') ? ' has-error' : '' }}">
	            <label for="id_tukang" class="control-label">Id Tukang</label>

	            <div>
	              <input id="id_tukang" maxlength="255" type="text" class="form-control " name="id_tukang" value="{{ old('id_tukang') }}" required autofocus autocomplete="off">

	              @if ($errors->has('id_tukang'))
	              <span class="help-block">
	                <strong>{{ $errors->first('id_tukang') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('id_alamat') ? ' has-error' : '' }}">
	            <label for="id_alamat" class="control-label">Id Alamat</label>

	            <div>
	              <input id="id_alamat" maxlength="255" type="text" class="form-control " name="id_alamat" value="{{ old('id_alamat') }}" required autofocus autocomplete="off">

	              @if ($errors->has('id_alamat'))
	              <span class="help-block">
	                <strong>{{ $errors->first('id_alamat') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('id_jasa') ? ' has-error' : '' }}">
	            <label for="id_jasa" class="control-label">Id Jasa</label>

	            <div>
	              <input id="id_jasa" maxlength="255" type="text" class="form-control " name="id_jasa" value="{{ old('id_jasa') }}" required autofocus autocomplete="off">

	              @if ($errors->has('id_jasa'))
	              <span class="help-block">
	                <strong>{{ $errors->first('id_jasa') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
	            <label for="total" class="control-label">Total</label>

	            <div>
	              <input id="total" maxlength="255" type="text" class="form-control " name="total" value="{{ old('total') }}" required autofocus autocomplete="off">

	              @if ($errors->has('total'))
	              <span class="help-block">
	                <strong>{{ $errors->first('total') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
	            <label for="keterangan" class="control-label">Keterangan</label>

	            <div>
	              <input id="keterangan" maxlength="" type="text" class="form-control " name="keterangan" value="{{ old('keterangan') }}" required autofocus autocomplete="off">

	              @if ($errors->has('keterangan'))
	              <span class="help-block">
	                <strong>{{ $errors->first('keterangan') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('pesan') ? ' has-error' : '' }}">
	            <label for="pesan" class="control-label">Pesan</label>

	            <div>
	              <input id="pesan" maxlength="" type="text" class="form-control " name="pesan" value="{{ old('pesan') }}" required autofocus autocomplete="off">

	              @if ($errors->has('pesan'))
	              <span class="help-block">
	                <strong>{{ $errors->first('pesan') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
            <div class="form-group">
              <div class="col-md-offset-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>
                  Simpan
                </button>
                <a href="{{ route('pemesanan.index') }}" class="btn btn-success"><i class="fa fa-times"></i> Batal</a>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
@endsection
@section('script')
<!-- Select2 -->
<script src="{{ asset('bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<!-- dropzonejs -->
<script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
<script>
$('#side_pemesanan').addClass("active");
  $(".datepicker").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd',
        minDate: 0,
    });
</script>
@endsection