@extends('layouts.app-master')

@section('title', 'Pelanggan | Sistem Informasi Akademik')
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
            <h1>Ubah Data Pelanggan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
              <li class="breadcrumb-item active">Ubah Data</li>
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
          <h3 class="card-title">Ubah Data Pelanggan</h3>

          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
           @foreach($pelanggan as $data)
            <form class="form-horizontal" role="form" method="POST" action="{{ url('pelanggan/update')}}/{{ $data->id }}">
              {{ csrf_field() }}

              <input type="hidden" name="_method" value="PUT">
              
        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
              <label for="id" class="control-label">Id</label>

              <div>
                <input id="id" maxlength="20 " type="text" class="form-control " name="id" value="{{ $data->id }}" required autofocus autocomplete="off">

                @if ($errors->has('id'))
                <span class="help-block">
                  <strong>{{ $errors->first('id') }}</strong>
                </span>
                @endif
              </div>
            </div>
        <div class="form-group{{ $errors->has('nama_pelanggan') ? ' has-error' : '' }}">
              <label for="nama_pelanggan" class="control-label">Nama Pelanggan</label>

              <div>
                <input id="nama_pelanggan" maxlength="255" type="text" class="form-control " name="nama_pelanggan" value="{{ $data->nama_pelanggan }}" required autofocus autocomplete="off">

                @if ($errors->has('nama_pelanggan'))
                <span class="help-block">
                  <strong>{{ $errors->first('nama_pelanggan') }}</strong>
                </span>
                @endif
              </div>
            </div>
        <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
              <label for="no_hp" class="control-label">No Hp</label>

              <div>
                <input id="no_hp" maxlength="255" type="text" class="form-control " name="no_hp" value="{{ $data->no_hp }}" required autofocus autocomplete="off">

                @if ($errors->has('no_hp'))
                <span class="help-block">
                  <strong>{{ $errors->first('no_hp') }}</strong>
                </span>
                @endif
              </div>
            </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label">Email</label>

              <div>
                <input id="email" maxlength="255" type="text" class="form-control " name="email" value="{{ $data->email }}" required autofocus autocomplete="off">

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>
              <div class="form-group">
                <div class="col-md-offset-4">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>
                    Simpan
                  </button>
                  <a href="{{ route('pelanggan.index') }}" class="btn btn-success"><i class="fa fa-times"></i> Batal</a>
                </div>
              </div>
            </form>
            @endforeach
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
$('#side_pelanggan').addClass("active");
  $(".datepicker").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd',
        minDate: 0,
    });
</script>
@endsection