@extends('layout-admin')


@section('title', 'Jadwal')
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
    <section id="starter-section" class="starter-section section">
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('jadwal')}}">Jadwal</a></li>
            <li class="current">Tambah Jadwal</li>
          </ol>
        </div>
      </nav>
    </div>

    <!-- Main content -->
    <div class="container" data-aos="fade-up">
     <br>
          <form class="form-horizontal" role="form" method="POST" action="{{ route('jadwal.store') }}">
            {{ csrf_field() }}
            
            <div class="mb-3 {{ $errors->has('id_pemesanan') ? ' has-error' : '' }}">
              <label for="id_pemesanan" class="form-label">Id Pemesanan</label>

              <div>
                <input id="id_pemesanan" maxlength="255" type="text" class="form-control " name="id_pemesanan" value="{{ old('id_pemesanan') }}" required autofocus autocomplete="off">

                @if ($errors->has('id_pemesanan'))
                <span class="help-block">
                  <strong>{{ $errors->first('id_pemesanan') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="mb-3 {{ $errors->has('tanggal_kunjungan') ? ' has-error' : '' }}">
              <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>

              <div>
                <input id="tanggal_kunjungan" maxlength="" type="text" class="form-control datepicker" name="tanggal_kunjungan" value="{{ old('tanggal_kunjungan') }}" required autofocus autocomplete="off">

                @if ($errors->has('tanggal_kunjungan'))
                <span class="help-block">
                  <strong>{{ $errors->first('tanggal_kunjungan') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="mb-3 {{ $errors->has('tanggal_selesai') ? ' has-error' : '' }}">
              <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>

              <div>
                <input id="tanggal_selesai" maxlength="" type="text" class="form-control datepicker" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required autofocus autocomplete="off">

                @if ($errors->has('tanggal_selesai'))
                <span class="help-block">
                  <strong>{{ $errors->first('tanggal_selesai') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="mb-3">
                  <div class="col-md-offset-4">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check"></i>
                      Simpan
                    </button>
                    <a href="{{ route('jadwal.index') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Batal</a>
                  </div>
                </div>
              </form>
            </div>
            @endsection
       