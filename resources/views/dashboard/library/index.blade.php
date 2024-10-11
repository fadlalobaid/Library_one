@extends('layout.dashboard.dashboard')

@section('title')
    Dashboard - Library
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Library</li>
    <li class="breadcrumb-item active" aria-current="page">index</li>
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card text-center ">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ route('libraries.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>
    <form action="{{ URL::current()}}" method="get" class="row g-3 m-1 backgr">
        <h1 class="head1">search</h1>
        <div class="col-auto ">
            <x-form.input name="auther_name" type="text" placeholder="auther_name" :value="request('auther_name ')" />
        </div>
        <div class="col-auto ">
            <x-form.input name="book_name" type="text" placeholder="book_name"  :value="request('book_name')"/>
        </div>
        <div class="col-auto">
            <x-form.input name="number_of_page" type="number" placeholder="number of page" />
        </div>
        <div class="col-auto">
            <x-form.input name="published" type="date" placeholder="published" />
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
    <div class="section-table mt-2">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">auther_name</th>
                    <th scope="col">book_name</th>
                    <th scope="col">number_of_page</th>
                    <th scope="col">published</th>
                </tr>
            </thead>
            <tbody>
                {{--  @foreach ($informations as $item)
                <tr>
                    <th scope="row">{{  $item->id }}</th>
                    <td>{{  $item->auther_name }}</td>
                    <td>{{  $item->auther_name }}</td>
                    <td>{{  $item->auther_name }}</td>
                    <td>{{  $item->auther_name }}</td>
                </tr>
                @endforeach  --}}

                @forelse($informations as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->auther_name }}</td>
                        <td>{{ $item->book_name }}</td>
                        <td>{{ $item->number_of_page }}</td>
                        <td>{{ $item->published }}</td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row">
                            NO-DATA
                        </th>
                    </tr>
                @endforelse


            </tbody>
        </table>
        {{$informations->links()}}
    </div>
@endsection

@push('styles')
    <style>
        .head1 {
            color: green;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .table {
            border-radius: 20px !important;
            border: 0.5px solid green !important
        }
        .col-auto {
            width: 300px !important;
            margin-left: 2px !important
        }
        .backgr{
           background-color: rgb(9, 172, 137);
           border-radius: 7px !important;
           padding: 5px !important
        }
    </style>
@endpush
@push('scripts')
@endpush
