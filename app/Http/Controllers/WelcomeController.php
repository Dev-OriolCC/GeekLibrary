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
            // Query Builder to search in four columns in table books
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

    // View for a inividual Book
    public function showBook(Book $book){
        return view('book')->with('book', $book);
    }

    //Make PDF 
    public function makePDF(Book $book){
        $data = [
            'title' => $book->title,
            'author' => $book->author,
            'description' => $book->description,
            'image' => $book->image,
            'isbn' => $book->isbn,
            'publisher' => $book->publisher,
            'pages' => $book->pages,
            'edition' => $book->edition,
            'country' => $book->country,
            'year' => $book->year,
            'descriptionLong' => $book->descriptionLong
        ];
        $pdf = PDF::loadview('bookPDF', $data);
        $pdfNumber = $data['isbn'];
        
        return $pdf->download("InformacionLibro_$pdfNumber.pdf");
    }

    

}
