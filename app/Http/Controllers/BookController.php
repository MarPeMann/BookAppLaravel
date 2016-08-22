<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;
use App\Http\Requests;

class BookController extends Controller
{

  public function getBookform()
  {
    return view('addbook');
  }

  public function getBooklist()
  {
    $books = Book::get();
    //$books = DB::table('books')->get();
    return view('booklist', ['books' => $books]);
  }

  public function getDetails($id)
  {
    $book = Book::where('id', $id)->first();
    //$user_id = $book->get('user_id');
    //$user = User::where('user_id', $user_id)->first();
    $user = $book->User()->get();
    //echo $user;
    return view('bookdetails', ['book' => $book, 'user' => $user]);
    // return view('bookdetails')
    //       ->with('book', $book)
    //       ->with('user', $user);
  }

  public function postBook(Request $request)
  {
    $validate = $this->validate($request, [
      'title' => 'required',
      'author' => 'required',
      'description' => 'required'
    ]);
    $book = new Book();

    $book->title = $request->title;
    $book->author = $request->author;
    $book->description = $request->description;

    Auth::user()->books()->save($book);

    return redirect()->route('profile', ['name' => Auth::user()->name]);
  }

}















 ?>
