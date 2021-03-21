@extends('layouts.app')

@section('content')

    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Agregar Categoria</a>
    <div class="card card-default">
        <div class="card-header">Categorias</div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Total Libros</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->books->count() }}</th>
                        <th>{{ $category->name }}</th>
                        <th>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info">Editar</a>
                        </th>
                        <th>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </table>
        
        </div>
    </div>

@endsection