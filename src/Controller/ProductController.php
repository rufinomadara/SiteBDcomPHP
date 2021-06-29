<?php 

namespace Code\Controller;

use Code\DB\Connection;
use Code\View\View;
use Code\Entity\Product;


class ProductController{

  public function index($id)
  {
    $id = (int) $id;

    $pdo = Connection::getInstance();

    $view = new View(view: 'site/single.phtml');

    $view->product = (new Product($pdo))->find($id);

    //$products = new Product($pdo); 
    
     //usa a view para chmar o ProductController
     //var_dump((new Product($pdo))->find($id)); die;

     return $view->render();

  }
}