@extends('administrator.layouts.app2')

@section('title', 'Ubah Password E-Sentiment Analysis')

@section('profil', 'active')

@section ('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ url('/gambar-user/'.Auth::user()->gambar) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                <p class="text-muted text-center">Administrator</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Ubah Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/updatePw/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Baru</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name ="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button class="btn btn-block btn-primary" type="submit">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


@endsection
