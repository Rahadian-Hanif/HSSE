@extends('home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User Guide</h1>
</div>

<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{ asset('USER GUIDE SEBAYA.pdf')}}" ></iframe>
</div>


@endsection