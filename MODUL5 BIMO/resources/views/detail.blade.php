
@extends('layouts.layout')

@section('content')
<section id='detail'>
    <div class="container mb-3 mt-3">
      @auth
                <h1 class='tambahh1'>{{ $showroom->name }}</h1>
                <p class='tambahp'>Detail Mobil {{ $showroom->name }}</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                <div class='container'>
                <div class='row g-2'>
                  <div class='col-6'>
                    <img src="{{ url('storage/'.$showroom->image) }}" alt='foto_mobil'>
                  </div>
                  <div class='col-6'>
                      <form action="{{ url('/detail/'.$showroom->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class='mb-3'>
                          <label for='name' class='form-label'>Nama Mobil</label>
                          <input type='text' class='form-control' id='name' name='name' value='{{ $showroom->name }}' readonly>
                        </div>
                        <div class='mb-3'>
                          <label for='pemilikmobil' class='form-label'>Nama Pemilik</label>
                          <input type='text' class='form-control' id='pemilikmobil' name='owner' value='{{$showroom->owner }}' readonly>
                        </div>
                        <div class='mb-3'>
                            <label for='merkmobil' class='form-label'>Merk</label>
                            <input type='text' class='form-control' id='merkmobil' name='brand' value='{{ $showroom->brand }}' readonly> 
                        </div>
                        <div class='mb-3'>
                            <label for='tanggal_beli'>Tanggal</label>
                            <input type='date' class='form-control' id='tanggal_beli' value='{{ $showroom->purchase_date }}' readonly>
                        </div>
                        <div class='mb-3'>
                            <label for='deskripsi' class='form-label'>Deskripsi</label>
                            <textarea class='form-control' id='deskripsi' name='deskripsi' rows='3' readonly>{{ $showroom->description }}</textarea>
                        </div>
                        <div class='mb-3'>
                            <label for='gambar' class='form-label'>Foto</label>
                            <input class='form-control' type='text' id='gambar' name='gambar' value='{{ $showroom->image}}' style='height: 50px;' readonly>
                        </div>
                        <div class='mb-1'>
                          <label for='status_pembayaran'>Status Pembayaran</label>
                        </div>
                        <div class='form-check form-check-inline'>
                          <input class='form-check-input' type='radio' name='statuspembayaran' id='lunas'value='Lunas' {{ (($showroom->status == 'Lunas') ? 'checked="checked"' : "")  }}>
                          <label class='form-check-label' for='inlineRadio1'>Lunas</label>
                        </div>
                        <div class='form-check form-check-inline'>
                          <input class='form-check-input' type='radio' name='statuspembayaran' id='belum lunas' value='Belum Lunas' {{ (($showroom->status == 'Belum Lunas') ? 'checked="checked"' : "")  }}>
                          <label class='form-check-label' for='inlineRadio2'>Belum Lunas</label>
                        </div>
                        <div class='mb-2'>
                          <a href='Edit-Bimo.php?id=" . $getDetail["id_mobil"] . "' class='btn btn-success' style='margin-top: 40px;'>Edit</a>
                        </div>
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
        @endauth
    </div>
  </section>
@endsection