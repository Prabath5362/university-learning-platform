@extends('layouts.admin_layout')

@section('admin-content')
    @if (session('cource_message'))
        <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session("cource_message") }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    @endif
    <div class="container-fluid">

        <h4 class="mb-4 mt-7 text-center">Available Courses</h4>

        <div class="row">

            {{-- @if ($cources->isEmpty())




            @else --}}

            @forelse ($cources as  $cource)
                <div class="col-md-4 mb-4">
                    <div class="card bg-white border text-dark shadow-sm h-100 card-hover">

                        <img src="{{ asset('images/' . $cource['image']) }}" class="card-img-top" alt="Course Image"
                            style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 0; border-top-right-radius: 0; display: block; margin: 0;">

                        <div class="card-body">
                            <h5 class="card-title text-center fs-6">{{ $cource['title'] }}</h5>
                            <p class="card-text fs-6">{{ $cource['description'] }}</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-secondary btn-sm">See More</a>
                            </div>

                        </div>
                    </div>
                </div>
            @empty
                <div class=" d-flex flex-grow-2  bg-danger justify-content-center item-align-center ">
                    <p style="margin: 0; padding: 0">No Cources Found !</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
