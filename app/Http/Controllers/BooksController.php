<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;
class BooksController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Get all books, order by date and add pagination
        $books = Book::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard')->with('books', $books);
    }

    public function archived_books()
    {
        //Get all archive Books
        $books = DB::table('books')->whereNotNull('deleted_at')->get();
        return view('books.archive')->with('books', $books);
    }

     public function show($id)
    {
        //Find book by ID
        $book = Book::findOrFail($id);
        return view('books.single')->with('book', $book);
    }

    public function submit(Request $request)
    {
        //Validate request
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'place_of_publication' => 'required',
            'editon' => 'required',
            'description' => 'required',

        ]);

        //Find book by ID
        $book = new Book();
        
        // Store in variable and save 
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->place_of_publication = $request->input('place_of_publication');
        $book->editon = $request->input('editon');
        $book->description = $request->input('description');
        $book->user_id = auth()->user()->id;
        $book->save();
        
        // Redirect to Homepage
        return redirect('/')->with('success', 'Book Created successfully');
    }

    public function store(Request $request)
    {
        //
        print_r($request->input());
    }

    

    public function update(Request $request, $id)
    {
        //Validate request
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'place_of_publication' => 'required',
            'editon' => 'required',
            'description' => 'required',
        ]);
        
        //Find book by ID
        $book = Book::find($id);
        
        // Store in variable and save 
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->place_of_publication = $request->input('place_of_publication');
        $book->editon = $request->input('editon');
        $book->description = $request->input('description');
        $book->user_id = auth()->user()->id;
        $book->save();
        
        // Redirect to Homepage
        return redirect('/')->with('success', 'Book Updated successfully');
    }

   

    public function edit($id)
    {
        //Find book by ID
        $book = Book::findOrFail($id);
        // Check if the user is allowed to Edit this. That is, if the user is the one that made this post
        if (auth()->user()->id !== $book->user_id) {
            return redirect('/')->with('error', 'Unauthorized page');
        }
        return view('books.edit')->with('book', $book);
    }


    public function destroy($id)
    {
        //Find book by ID
        $book = Book::find($id);

        // Check if the user is allowed to delete this. That is, if the user is the one that made this post
        // if (auth()->user()->id !== $book->user_id) {
        //     return redirect('/')->with('error', 'Unauthorized page');
        // }
        // permanently delete
        $book->forceDelete();

        // Redirect to Homepage
        return redirect('/')->with('success', 'Book Deleted successfully');
    }

    public function soft_delete($id)
    {
        //Find book by ID
        $book = Book::find($id);
        // Temporarily delete
        $book->delete();
        // Redirect to Homepage
        return redirect('/')->with('success', 'Book archived successfully');
    }

    public function restore($id)
    {
        // Find Book that is trashed and then restore
        $book = Book::withTrashed()->find($id);
        $book->restore();
        // Redirect to Homepage
        return redirect('/')->with('success', 'Book Restored successfully');
    }

    public function search(Request $request)
    {
        //Validate request
        $this->validate($request, [
            'query' => 'required',
        ]);

        $query = $request->input('query');

        $books = Book::where('title', 'LIKE', '%' . $query . '%' )
                        ->orWhere('author', 'LIKE', '%' . $query . '%')
                        ->orWhere('place_of_publication', 'LIKE', '%' . $query . '%')
                        ->orWhere('editon', 'LIKE', '%' . $query . '%')
                        ->get();
        
        return view('search')->with('books', $books);
    }
}
