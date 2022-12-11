@extends('layouts.layout')

@section('content')
<section id="profile">
    <div class="container d-flex flex-column pt-5">
        @csrf
        @method('PUT')
        <div class="profile container">
          <span class="text-center mt-4">
            <h1>Profile</h1>
          </span>
          <form method="POST">
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9 mb-2">
                        <input type="text" readonly class="form-control-plaintext" id="email" value="{{ $user->email }}">
                    </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-9 mb-3">
                        <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $user->no_hp }}">
                    </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
                    <div class="col-sm-9 mb-3">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-9 mb-3">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
            </div>
            <div class="row justify-content-center mb-2">
                <button type="submit" name="update" class="btn btn-info btn-block">Update</button>
            </div>
            <div class="row justify-content-center">
                <a class="btn btn-secondary btn-block" href="Home-Bimo.php" role="button">Cancel</a>
            </div>
        </form>
    <!-- <form action="{{ '/profile/'.$user->id  }}" method="POST" enctype="multipart/form-data">
          <div class="dform-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <h2>{{ $user->email }}</h2>
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nama">Nama</label>
            <input id="nama" name="name" value="{{ $user->name }}">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nohp">Nomor Handphone</label>
            <input id="nohp" name="no_hp" value="{{ $user->no_hp }}">
          </div>
          <hr>
          <div class="d-flex align-items-center">
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="password">Konfirmasi Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Konfirmasi Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4 justify-content-center">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form> -->
        <div class="d-flex align-items-center gap-5 mt-5">
          <img src="../assets/img/logo-ead.png" alt="logoead" style="width:100px;">
          <p style="margin-top: 20px; font-size:14px;">Bimo_1202201138</p>
        </div>
    </div>
</section>
@endsection