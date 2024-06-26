@extends('layout.main')

@section('content')
    <h1>Mis Bookmarks</h1>
    <h4>Gestión de Contenidos</h4>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Link</td>
            </tr>
        </thead>
        <tbody>
            @if(sizeof($bookmarks) > 0)
            @foreach ($bookmarks as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->link }}</td>
                </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6">¡No hay Bookmarks!</td>
            </tr>
            @endif
        </tbody>
    </table>
@endsection