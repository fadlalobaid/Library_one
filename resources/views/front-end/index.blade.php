@extends('layout.front-end.front')

@section('title')
Dashboard - Library
@endsection

@section('content')
@forelse ($informations as $item)

<div class="post-card mt-3">
  <div class="card">

    <div class="card-header">
      Auther Name:{{ $item->auther_name }}
    </div>
    <div class="card-body">
      <h5 class="card-title">Book Name:{{ $item->book_name }}</h5>
      <p class="card-text">number_of_page:{{ $item->number_of_page }}</p>
      <p class="card-text">published:{{ $item->published}}</p>


    </div>
  </div>
</div>
@empty
<div class="card">
    <div class="card-header">
        NO-DATA
    </div>

  </div>

@endforelse
@endsection

@push('styles')
<style>
    .post-card{
        width: 50%;
        margin: auto
    }
</style>
@endpush
@push('scripts')

@endpush
