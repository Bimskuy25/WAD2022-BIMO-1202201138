@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-center align-items-center mt-5">
            <div>
                <h1>Welcome To<br> Bimo Show Room</h1>
                <p class="mt-3">Menjual segala jenis mobil yang menarik dan juga berkelas <br>untuk dipakai sehari-hari atau pun untuk style</p>
                <div class="d-flex  justify-content-lg-start mt-2">

                </div>
                <div class="d-flex align-items-center gap-5 mt-5">
                    <img src="assets/img/logo-ead.png" alt="logoead" style="width:100px;">
                    <p style="margin-top: 20px; font-size:14px;">Bimo_1202201138</p>
                </div>
            </div>
            {{-- display image from assets/img --}}
            <img src="assets/img/bmw_m4.jpg" alt="" style="width:600px;">
        </div>
    </div>
</section>
<!-- Jumbotron End -->
@endsection