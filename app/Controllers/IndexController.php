<?php

namespace App\Controllers;

use Yahmi\Routing\Controller;
use App\Models\Catalogue\Book;

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

      $this->view('home.index',compact('book_list'));
   }
}
