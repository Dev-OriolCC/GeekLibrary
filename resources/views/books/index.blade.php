@extends('layouts.app')

@section('content')


    <a href="{{ route('books.create') }}" class="btn btn-success">Agregar Libro 📕</a>
    
    <div class="card card-default mt-3">
        <div class="card-header">Seccion Libros</div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="bg-info">
                    <th>Portada</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th></th>
                    <th></th>
                </thead>
                    @foreach($books as $book)
                        <tr>
                            <td><img src="{{ asset('storage/'.$book->image) }}" width="60px" height="60px" alt=""></td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                @if($book->trashed())
                                    <form action="{{ route('restore', $book->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <button type="submit" class="btn btn-info text-white">Restablecer</button>
                                    </form>
                                @else
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Actualizar</a></td>
                                @endif
                            <td>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>

@endsection