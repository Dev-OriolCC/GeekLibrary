<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Category;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Storage;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('books.index')->with('books', Book::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('books.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest $request){

        $image = $request->image->store('books');
         // Ingresar
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'image' => $image,
            'isbn' => $request->isbn,
            'publisher' => $request->publisher,
            'pages' => $request->pages,
            'edition' => $request->edition,
            'country' => $request->country,
            'year' => $request->year,
            'category_id' => $request->category_id,
            'descriptionLong' => $request->descriptionLong
        ]);
        // Mensaje
        session()->flash('success', 'El libro se a creado exitosamente 📚');
        // Redirecionar al Index
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book){
        return view('books.create')->with('book', $book)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book){
        $data = $request->only(['title', 'author', 'description', 'pages', 'isbn', 'publisher', 'edition', 'country', 'year', 'descriptionLong', 'category_id']);

        if($request->hasFile('image')){
            $image = $request->image->store('books');
            Storage::delete($book->image);
            $data['image'] = $image;
        }
        $book->update($data);

        session()->flash('success', 'El libro se a actualizado correctamente 😀');
        return redirect(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $book = Book::withTrashed()->where('id', $id)->firstOrFail();    

        if ($book->trashed()) {
            session()->flash('success', 'El libro se a eliminado exitosamente');
            Storage::delete($book->image);    
            $book->forceDelete();
        }else{
            session()->flash('success', 'El libro se envio a la papelera exitosamente');
            $book->delete();
        }
        return redirect(route('books.index'));
    }

    public function trash(){
        $trashed = Book::onlyTrashed()->get();
        session()->flash('error', 'Estas visualizando Libros en papelera');
        return view('books.index')->withBooks($trashed);
    }

    public function restore($id){
        $book = Book::withTrashed()->where('id', $id)->firstOrFail();
        $book->restore();
        session()->flash('success', 'El libro se a restablicido correctamente');
        return redirect(route('books.index'));

    }

}
