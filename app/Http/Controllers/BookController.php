<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('sitdh.index', compact('books'));
    }

    public function store()
    {
        // 1
        // $book = new Book(request(
        //     ['title', 'author', 'price', 'publish_date', 'website']
        // ));
        // $book->save();

        // 2 
        Book::create(request(
            ['title', 'author', 'price', 'publish_date', 'website']
        ));

        return back();
    }

    public function view(Book $book)
    {
        return view('sitdh.view', compact('book'));
    }

    public function update($id)
    {
        Book::find($id)->update(request(
            ['title', 'author', 'price', 'publish_date', 'website']
        ));

        return redirect('/sitdh');
    }

    public function destroy($book) 
    {
        Book::destroy($book);
        return back();
    }
}
