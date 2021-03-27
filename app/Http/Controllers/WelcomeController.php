<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use Facade\Ignition\QueryRecorder\Query;
use PDF;

class WelcomeController extends Controller{
    
    public function index(){
        
        $search = request()->query('search');
        if($search){
            // Query Builder to search in three columns in table books
            $books = Book::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('author', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->get();

            if($books->isNotEmpty()){
                $totalSearch = $books->count();
                session()->flash('success', "Tu busqueda tuvo $totalSearch resultados 😉");
            }
            return view('welcome')->with('books', $books)->with('search', $search);

            //$books = Book::where('title', 'LIKE', "%{$search}%")->get();
        }else{
            $books = Book::all();
            return view('welcome')->with('books', $books);
        }

    }

    // Vista para libro individual
    public function showBook(Book $book){
        return view('book')->with('book', $book);
    }

    //Make PDF 
    public function makePDF(){
        $data = Book::all();
        //dd($data);
        //return view('bookPDF')->with('data', $data);
        $pdf = PDF::loadview('bookPDF', compact('data'));        
        return $pdf->download("ReporteLibros_GeekLibrary.pdf");
    }

    

}
