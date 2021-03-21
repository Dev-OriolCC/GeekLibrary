@extends('layouts.home')

@section('content')

        <!-- <div class="col-12"> -->
        <div class="row">
            <div class="col-sm-7" align="center">
                <img src="{{ asset('storage/'.$book->image) }}" alt="portada" class="mt-5" width="430px" height="600px">
                <br> <a href="{{ route('makePDF', $book->id) }}" class="mt-3 btn btn-danger">Descargar PDF 📑</a>
            </div>
            <div class="container mt-3 mb-4 col-12 col-sm-4">
                <div class="card card-default">
                    <div class="card-header"><h4><strong>Informacion del Libro: </strong> {{ $book->title }}</h4></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="titulo"><strong>Titulo: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="autor"><strong>Autor: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->author }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"><strong>Descripcion Corta: </strong></label>
                            <textarea name="descripcion" class="form-control" cols="30" rows="5" readonly>{{ $book->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"><strong>Descripcion Completa: </strong></label>
                            <textarea name="descripcion" class="form-control" cols="30" rows="10" readonly>{{ $book->descriptionLong }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="isbn"><strong>ISBN: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->isbn }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="publisher"><strong>Editorial: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->publisher }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pages"><strong>Paginas: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->pages }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="edition"><strong>Edicion: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->edition }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="country"><strong>Pais: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->country }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fecha"><strong>Fecha: </strong></label>
                            <input type="text" class="form-control" value="{{ $book->year }}" readonly>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    

@endsection