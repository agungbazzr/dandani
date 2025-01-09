@extends('layout-admin')
@section('content')

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('jasa')}}">Layanan</a></li>
            <li class="current">Tambah Jasa</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
     
      <div class="container" data-aos="fade-up">
         <!-- Section Title -->
      <div class="container section-title mt-5" data-aos="fade-up">
        <h2>Jasa Layanan</h2>
        <p>Layanan Tersedia Dandani.id</p>
      </div><!-- End Section Title -->
      <div class="card-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('jasa.store') }}">
            {{ csrf_field() }}
            
			  <div class="form-group{{ $errors->has('nama_jasa') ? ' has-error' : '' }}">
	            <label for="nama_jasa" class="control-label">Nama Jasa</label>

	            <div>
	              <input id="nama_jasa" maxlength="255" type="text" class="form-control " name="nama_jasa" value="{{ old('nama_jasa') }}" required autofocus autocomplete="off">

	              @if ($errors->has('nama_jasa'))
	              <span class="help-block">
	                <strong>{{ $errors->first('nama_jasa') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('jenis_jasa') ? ' has-error' : '' }}">
	            <label for="jenis_jasa" class="control-label">Jenis Jasa</label>

	            <div>
	              <input id="jenis_jasa" maxlength="255" type="text" class="form-control " name="jenis_jasa" value="{{ old('jenis_jasa') }}" required autofocus autocomplete="off">

	              @if ($errors->has('jenis_jasa'))
	              <span class="help-block">
	                <strong>{{ $errors->first('jenis_jasa') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('harga_jasa') ? ' has-error' : '' }}">
	            <label for="harga_jasa" class="control-label">Harga Jasa</label>

	            <div>
	              <input id="harga_jasa" maxlength="255" type="text" class="form-control " name="harga_jasa" value="{{ old('harga_jasa') }}" required autofocus autocomplete="off">

	              @if ($errors->has('harga_jasa'))
	              <span class="help-block">
	                <strong>{{ $errors->first('harga_jasa') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('waktu_estimasi') ? ' has-error' : '' }}">
	            <label for="waktu_estimasi" class="control-label">Waktu Estimasi</label>

	            <div>
	              <input id="waktu_estimasi" maxlength="255" type="text" class="form-control " name="waktu_estimasi" value="{{ old('waktu_estimasi') }}" required autofocus autocomplete="off">

	              @if ($errors->has('waktu_estimasi'))
	              <span class="help-block">
	                <strong>{{ $errors->first('waktu_estimasi') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
			  <div class="form-group{{ $errors->has('keterangan_jasa') ? ' has-error' : '' }}">
	            <label for="keterangan_jasa" class="control-label">Keterangan Jasa</label>

	            <div>
	              <input id="keterangan_jasa" maxlength="" type="text" class="form-control " name="keterangan_jasa" value="{{ old('keterangan_jasa') }}" required autofocus autocomplete="off">

	              @if ($errors->has('keterangan_jasa'))
	              <span class="help-block">
	                <strong>{{ $errors->first('keterangan_jasa') }}</strong>
	              </span>
	              @endif
	            </div>
	          </div>
            <div class="form-group">
              <div class="col-md-offset-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>
                  Simpan
                </button>
                <a href="{{ route('jasa.index') }}" class="btn btn-success"><i class="fa fa-times"></i> Batal</a>
              </div>
            </div>
          </form>
        </div>

    </section><!-- /Starter Section Section -->
    <section id="starter-section" class="starter-section section">
    </section><!-- /Starter Section Section -->
       
@endsection