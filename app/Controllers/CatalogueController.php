<?php

namespace App\Controllers;

use Yahmi\Routing\Controller;
use App\Models\Catalogue\Book;
use Yahmi\Log\Logger;
use Yahmi\Config\Config;
use Yahmi\Validation\Validator;
use Yahmi\Http\Response;
use Illuminate\Support\Collection;


class CatalogueController extends Controller
{
   private $bookService;

   public function __construct(Book $book)
   {
      parent::__construct();
      $this->bookService = $book;

      //define middlewares from controllers
      $this->middleware('FirstMiddleware',['only'=>['getTitleList','getEditTitle']]);
      $this->middleware('SecondMiddleware',['except'=>['getTitleList','postAddTitle']]);
   }

   /**
    * Title list action
    * @return [type] [description]
    */
   public function getTitleList()
   {
        
        // var_dump($this->bookService->getBookList());
        // $app = new Config('app.php');
        // var_dump($app);
        //Logger::log($this->bookService->getCurrency());
          $products = array(
              array('product_name'=>'Potato1'),
              array('product_name'=>'Potato2'),
              array('product_name'=>'Potato3'),
              array('product_name'=>'Potato4')
            );
         
        $name = "bldae template";
        $price_list = collect(12,23,34,43);
        $price_list = $price_list->toArray();
        //var_dump($this->generateUrl('edit_title',[':title_id'=>2,':project_id'=>5]));
        // returning view
        return view('catalogue.titles',compact('name','products','price_list'));
        // testing redirect to route
        // $this->redirectToRoute('edit_title',[':title_id'=>2,':project_id'=>5]);
   }

   /**
    * Add title action
    */
   public function postAddTitle()
   {
      $rules = [
          'first_name'  => ['required'] 
      ];
      
      $validator_instance = Validator::makeValidator($_POST, $rules, true);
      $validator_instance->sendValidationErrorsIfAny("Registration failed due to incorrect data"); 

     echo "add Title action. you have posted:  ".$_POST['first_name'];
   }

   /**
    * Edit title action
    * @param  [type] $title_id   [description]
    * @param  [type] $project_id [description]
    * @return [type]             [description]
    */
   public function getEditTitle($title_id,$project_id)
   {
      // echo "edit title action for title id: ".$title_id." and project id ".$project_id;
      return view('catalogue.edit',compact('title_id','project_id'));
   }

}
