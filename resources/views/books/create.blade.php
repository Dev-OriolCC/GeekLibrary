@extends('layouts.app')

@section('content')

    <div class="card card-default">
        <div class="card-header">{{ isset($book) ? 'Editar Libro' : 'Agregar Libro' }}</div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}" method="POST" enctype="multipart/form-data">
                
                @if(isset($book))
                    @method('PUT')
                @endif

                @csrf
                
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" class="form-control" value="{{ isset($book) ? $book->title : '' }} ">
                </div>

                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" name="author" class="form-control" value="{{ isset($book) ? $book->author : '' }}">
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <textarea name="description" class="form-control" cols="15" rows="5">{{ isset($book) ? $book->description : '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="descriptionLong">Descripcion Completa</label>
                    <textarea name="descriptionLong" class="form-control" cols="20" rows="10">{{ isset($book) ? $book->descriptionLong : '' }}</textarea>
                </div>

                <div class="form-group">
                @if(isset($book))
                    <div class="form-group" align="center">
                        <img src="{{ asset('storage/'.$book->image) }}" alt="" height="200px" width="200px">
                    </div>
                @endif
                    <label for="image">Portada</label>
                    <input type="file" name="image" class="form-control" value="{{ isset($book) ? $book->image : '' }}">
                </div>

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" class="form-control" value="{{ isset($book) ? $book->isbn : '' }}">
                </div>

                <div class="form-group">
                    <label for="publisher">Editorial</label>
                    <input type="text" name="publisher" class="form-control" value="{{ isset($book) ? $book->publisher : '' }}">
                </div>

                <div class="form-group">
                    <label for="pages">Paginas</label>
                    <input type="number" name="pages" class="form-control" value="{{ isset($book) ? $book->pages : '' }}">
                </div>

                <div class="form-group">
                    <label for="category_id" class="">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if(isset($book)) 
                                        @if($category->id == $book->category_id)
                                            selected
                                        @endif
                                    @endif
                                >{{ $category->name }}</option>

                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <label for="edition">Edicion</label>
                    <input type="text" name="edition" class="form-control" value="{{ isset($book) ? $book->edition : '' }}">
                </div>

                <div class="form-group">
                    <label for="country">Pais</label>
                    <input type="text" name="country" class="form-control" value="{{ isset($book) ? $book->country : '' }}">
                </div>

                <div class="form-group">
                    <label for="year">Fecha</label>
                    <input type="date" name="year" class="form-control" value="{{ isset($book) ? $book->year : '' }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">{{ isset($book) ? 'Guardar cambios' : 'Agregar Libro' }}</button>
                </div>
            
            </form>
        </div> <!-- CARD-BODY -->
    </div>

@endsection