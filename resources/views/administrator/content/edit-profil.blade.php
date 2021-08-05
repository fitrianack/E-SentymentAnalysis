@extends('administrator.layouts.app2')

@section('title', 'Edit Profil E-Sentyment Analysis')

@section('profil', 'active')

@section ('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Profil</h1>
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
                <h3 class="card-title">Form Edit Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/profil/update/{{Auth::user()->id}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}"required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{Auth::user()->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kontak</label>
                        <input type="text" name="kontak" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->kontak}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Foto Profil</label>
                        <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->gambar}}">
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
