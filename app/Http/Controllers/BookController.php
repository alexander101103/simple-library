<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = book::all();
        return view('index', compact('books'));
    }
    public function form(){
        return view('form');
    }
    public function store(Request $request){
        // dd($request->all());
        Book::create($request->all());
        return view('index');

        $books= Book::create($request->all());
        return redirect();
    }
}
