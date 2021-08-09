@extends('administrator.layouts.app2')

@section('title', 'Kelola Profil E-Sentiment Analysis')

@section('profil', 'active')

@section ('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
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
        <a href="/admin/ubah-password" class="btn btn-primary"><i class="fas fa-lock-open"></i> Ubah Password</a>
        <br>
        <br>
        <div class="row">
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

                <a href="/admin/profil/edit" class="btn btn-primary btn-block"><i class="fas fa-edit"></i><b> Edit Profil</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-8">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong> Nama</strong>

                <p class="text-muted">
                 {{Auth::user()->name}}
                </p>

                <hr>

                <strong></i> Email</strong>

                <p class="text-muted">{{Auth::user()->email}}</p>

                <hr>

                <strong> Alamat</strong>

                <p class="text-muted">{{Auth::user()->alamat}}</p>

                <hr>

                <strong> Kontak</strong>

                <p class="text-muted">{{Auth::user()->kontak}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
