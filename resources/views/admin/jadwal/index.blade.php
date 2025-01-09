@extends('layouts.app-master')

@section('title', 'DANDANI | Jadwal')
@section('link')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Jadwal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> Jadwal</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @if (session('msg'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        {{ session('msg') }}
      </div>
    @endif
    @if(session('error'))
      <div class="alert alert-error alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Error!</h5>
        {{ session ('error') }}
      </div>
    @endif

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Jadwal</h3>

          <div class="card-tools">
            <a href="{{ route('jadwal.create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="tbl_data" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                
								<th class="text-center">Id</th>
								<th class="text-center">Id Pemesanan</th>
								<th class="text-center">Tanggal Kunjungan</th>
								<th class="text-center">Tanggal Selesai</th>
                <th class="text-center">Action</th>

              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($jadwal as $data )
              <tr>
                <td class="text-center"><?= $no; ?></td>
                
								<td class="text-center">{{ $data->id }}</td>
								<td class="text-center">{{ $data->id_pemesanan }}</td>
								<td class="text-center">{{ $data->tanggal_kunjungan }}</td>
								<td class="text-center">{{ $data->tanggal_selesai }}</td>
                <td class="text-center">
                  <a href="{{ url('jadwal/destroy')}}/{{ $data->id }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-primary"><i class="fa fa-trash fa-fw"></i> Hapus</a> |
                  <a href="{{ url('jadwal/edit')}}/{{ $data->id }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                </td>
              </tr>
              <?php $no++; ?>
              @endforeach
            </tbody>
            </table>
          </div>
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
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $('#side_jadwal').addClass("active");
  $('#tbl_data').DataTable();
</script>
@endsection