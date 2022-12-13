@extends('layouts.layout')

@section('content')
<section id='add'>
        <div class="container mb-3 mt-3">
            <h3 class="addcar">Tambah Mobil</h3>
            <p class="addcars">Tambah Mobil Baru Anda Ke List Show Room</p>
            <form action="{{ url('addCar') }}" method="POST" enctype="multipart/form-data">
                @auth
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <!-- <div class="mb-3">
                    <label for="user_id" class="form-label">id Mobil</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan Nama Mobil" value="{{ auth()->user()->user_id }}" >
                </div> -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="owner" name="name" placeholder="Masukkan Nama Mobil" value="{{ auth()->user()->name }}" >
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="owner" name="owner" placeholder="Masukkan Nama Pemilik">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Masukkan Merk Mobil"> 
                </div> 
                <div class="mb-3">
                    <label for="purchase_date">Tanggal</label>
                    <input type="date" class="form-control" id="purchase_date" name="purchase_date">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="mb-1">
                    <label for="status_pembayaran">Status Pembayaran</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas">
                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="belum" value="Belum Lunas">
                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                </div>
                <div class="mt-2">
                <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
                @endauth
            </form>
        </div>
</section>
@endsection