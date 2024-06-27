@extends('layout.main')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h4>Ver Bookmark</h4>
            </div>
            <div class="col-xs-12 col-md-2">
                <strong>Name:</strong>
            </div>
            <div class="col-xs-12 col-md-10">
                {{ $bookmark->name }}
            </div>
            <div class="col-xs-12 col-md-2">
                <strong>Link:</strong>
            </div>
            <div class="col-xs-12 col-md-10">
                <a href="{{ $bookmark->link }}" target="_blank">{{ $bookmark->link }} </a>
            </div>
        </div>
    </div>
@endsection
