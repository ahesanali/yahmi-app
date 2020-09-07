<?php

namespace App\Controllers;

use Yahmi\Routing\Controller;
use App\Models\Catalogue\Book;
use Yahmi\Log\Logger;

class IndexController extends Controller
{

   private $bookService;
	
   public function __construct(Book $book)
   {
       parent::__construct();
	     $this->bookService = $book;
   }
   public function index()
   {
		  $book_list = $this->bookService->getBookList();
      Logger::log("--This is basic string log--");
      return view('home.index',compact('book_list'));
   }
}
