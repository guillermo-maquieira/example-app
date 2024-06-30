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
                <td>Acción</td>
            </tr>
        </thead>
        <tbody>
            @if(sizeof($bookmarks) > 0)
            @foreach ($bookmarks as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->link }}</td>
                    <td><a class="btn btn-small btn-info" href="{{ route('bookmarks.show', $value) }}"><span class="glyphicon glyphicon-zoom-in"></span></a>
                    <form action="{{ route('bookmarks.destroy', $value->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                    </td>
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