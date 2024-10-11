@extends('layout.dashboard.dashboard')

@section('title')
    Dashboard - Create
@endsection
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Library</li>
    <li class="breadcrumb-item active" aria-current="page">create</li>
@endsection

@section('content')
    <div class="sec p-2">
        {{--  @if ($errors->Any())
            <h3>ERROR</h3>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}
        <a href="{{ route('libraries.index') }}" class="btn btn-primary botn mb-3">library</a>
        <form action="{{ route('libraries.store') }}" method="post">
            @csrf
            {{--  name  --}}
            <div class="mb-3">
                <x-form.input name="auther_name" type="text" placeholder="auther_name" />
                {{--  <input class="form-control
               @error('auther_name')
                is-invalid
                 @enderror "
                    name="auther_name" type="text" placeholder="auther_name" value="{{ old('auther_name') }}">
                @error('auther_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror  --}}
            </div>
            {{--  namebook  --}}
            <div class="mb-3">
                <x-form.input name="book_name" type="text" placeholder="book_name" />

                {{--  <input class="form-control
                @error('book_name')
                is-invalid
                @enderror
                "
                name="book_name" type="text" placeholder="book_name" value="{{ old('book_name') }}">
                @error('book_name')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>
                @enderror --}}
            </div>
            {{--  page-name  --}}
            <div class="mb-3">
                <x-form.input name="number_of_page" type="number" placeholder="number of page" />

                {{--  <input class="form-control
                @error('number_of_page')
                is-invalid

                @enderror
                " name="number_of_page" type="number" placeholder="number_of_page" value="{{ old('number_of_page') }}">
                @error('number_of_page')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>

                @enderror  --}}
            </div>
            {{--  data  --}}
            <div class="mb-3">
                <x-form.input name="published" type="date" placeholder="published" />

                {{--  <input class="form-control
                @error('published')
                  is-invalid
                @enderror
                " name="published" type="date" placeholder="published" value="{{ old('published') }}">
                @error('published')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror  --}}
            </div>
            <button type="submit" class="btn btn-primary m-2">ADD BOOK</button>
        </form>
    </div>
@endsection

@push('styles')
    <style>
        .head1 {
            color: green;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .sec {
            width: 79% !important;
            border: 1px solid white !important;
            border-radius: 15px !important;
            margin: auto !important;
        }

        .botn {
            margin-left: 45%;
            width: 100px;
        }
    </style>
@endpush
@push('scripts')
@endpush
