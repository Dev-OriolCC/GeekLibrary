@extends('layouts.home')

@section('content')
    
    <div class="container">
        <div class="row">
            @if($books->isNotEmpty() )
                @foreach($books as $book)
                    <div class="col-12 col-lg-3 mt-5 mb-5">
                        <div class="card d-block bg-light" style="height: 675px;">
                            <div class="card-img-top">
                                <div align="center" class="mt-2">
                                <img src="{{ 'storage/'.$book->image }}" alt="Portada" width="250px" height="300px">                    
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-start">{{ $book->title }} </h5>
                                <strong><i>{{ $book->author }}</i></strong>
                                <p align="justify">{{ $book->description }}</p>
                                <a href="{{ route('showBook', $book->id) }}" class="btn btn-info">Visualizar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-primary">No se econtraron libros {{ isset($search) ? "para tu busqueda: $search " : '' }} 😔😔</h2>
            @endif
    
        </div>
    
    </div>

@endsection
