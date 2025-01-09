@extends('layouts.app-master')


@section('title', 'Alamat | Sistem Informasi Akademik')
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
            <h1>Tambah Alamat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('alamat.index') }}">Alamat</a></li>
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
          <h3 class="card-title">Tambah Data Alamat</h3>

          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('alamat.store') }}">
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
			  <div class="form-group{{ $errors->has('id_pemilik') ? ' has-error' : '' }}">
	            <label for="id_pemilik" class="control-label">Id Pemilik</label>

	            <div>
	              <input id="id_pemilik" maxlength="255" type="text" class="form-control " name="id_pemilik" value="{{ old('id_pemilik') }}" required autofocus autocomplete="off">

	              @if ($errors->has('id_pemilik'))
	              <span class="help-block">
	                <strong>{{ $errors->first('id_pemilik') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	            <label for="title" class="control-label">Title</label>

	            <div>
	              <input id="title" maxlength="255" type="text" class="form-control " name="title" value="{{ old('title') }}" required autofocus autocomplete="off">

	              @if ($errors->has('title'))
	              <span class="help-block">
	                <strong>{{ $errors->first('title') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('geo_lat') ? ' has-error' : '' }}">
	            <label for="geo_lat" class="control-label">Geo Lat</label>

	            <div>
	              <input id="geo_lat" maxlength="255" type="text" class="form-control " name="geo_lat" value="{{ old('geo_lat') }}" required autofocus autocomplete="off">

	              @if ($errors->has('geo_lat'))
	              <span class="help-block">
	                <strong>{{ $errors->first('geo_lat') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('geo_long') ? ' has-error' : '' }}">
	            <label for="geo_long" class="control-label">Geo Long</label>

	            <div>
	              <input id="geo_long" maxlength="255" type="text" class="form-control " name="geo_long" value="{{ old('geo_long') }}" required autofocus autocomplete="off">

	              @if ($errors->has('geo_long'))
	              <span class="help-block">
	                <strong>{{ $errors->first('geo_long') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	            <label for="alamat" class="control-label">Alamat</label>

	            <div>
	              <input id="alamat" maxlength="" type="text" class="form-control " name="alamat" value="{{ old('alamat') }}" required autofocus autocomplete="off">

	              @if ($errors->has('alamat'))
	              <span class="help-block">
	                <strong>{{ $errors->first('alamat') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
            <div class="form-group">
              <div class="col-md-offset-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>
                  Simpan
                </button>
                <a href="{{ route('alamat.index') }}" class="btn btn-success"><i class="fa fa-times"></i> Batal</a>
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
$('#side_alamat').addClass("active");
  $(".datepicker").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd',
        minDate: 0,
    });
</script>
@endsection