@extends('administrator.layouts.app2')

@section('title', 'Analisis Sentimen E-Sentyment Analysis')

@section('analisis-sentimen', 'active')

@section ('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Analisis Sentimen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Analisis Sentimen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i> Tambah Data Testing
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Testing</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form method="POST" action="">
                  {{ csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sentimen</label>
                    <textarea name="sentimen" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Sentimen..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Akun Twitter</label>
                    <input name="twitter_account" type="text" class="form-control" placeholder=" Masukkan Username Twitter Account..." required>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal dan Waktu:</label>
                    <input name="tgl_waktu" type="datetime-local" class="form-control" required>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary swalDefaultSuccess" >TAMBAH</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <!-- left column -->
        <div class="col-12">  
          <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Data Testing</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Sentimen</th>
                    <th>Twitter Account</th>
                    <th>Tanggal dan Waktu</th>
                    <th>Prediksi Label</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class="d-inline-flex">
                        <a class="btn-show-file btn btn-dark mr-2 fas fa-eye" data-id=""> Show</a>
                        <a class="btn btn-info fas fa-file-archive mr-2" href="" target="_blank" role="button"></a>
                        <a class="btn-delete-file btn btn-danger fas fa-trash-alt" data-id=""> Delete</a>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!-- /.card -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->

@section('javascripts')
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection

@endsection