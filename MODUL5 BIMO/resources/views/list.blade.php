@extends('layouts.layout')
@section('list')
    active
@endsection
@section('content')

<section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Bimo - 1202201138</p>
        <div class="d-flex gap-5">
          @foreach ($showroom as $row)
            <div class='card cardcontent' style='width: 18rem;'>
            <img src='{{ asset('storage/'.$row->image)}}' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
                <h5 class='card-title'>{{ $row->name }}</h5>
                <p class='card-text'>{{ $row->description }}</p>
                <span class='d-flex gap-2'>
                <!-- <a href="{{ '/detail/'.$row->id }}" class='bnt btn-success' style='border-radius: 100px; width:140px; height: 36px;'></a> -->
                  <a href="{{ '/detail/'.$row->id }}" class='btn btn-success' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                  <form action="{{ url('list/'.$row->id) }}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px;'>Delete</button>
                  </form>
                </span>
            </div>
            </div>
          @endforeach
        </div>  
      </div>
    </div>
  </section>

@endsection
