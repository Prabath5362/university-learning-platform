@extends('layouts.app')

@section('content')
<div class="admin-wrapper">
    <div class="bg-light .bg-gradient text-dark admin-sidebar">
        @include("partials.admin_slider")
    </div>

    <div class="col-md-9 col-lg-10 offset-3 admin-content">
        @yield("admin-content")
        @yield("add-cource")
        @yield("students-list")
    </div>
</div>
@endsection
