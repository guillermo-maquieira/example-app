@extends('layout.main')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Boookmark</h2>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('bookmarks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Link:</strong>
                        <input type="text" name="link" class="form-control" placeholder="Link to your bookmark">
                        @error('link')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                    <button type="submit" class="btn btn-success ml-3">Enviar</button>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('bookmarks.index') }}"> Atrás</a>
                    </div>
        </form>
    </div>
@endsection