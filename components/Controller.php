<?php


namespace components;


use components\Response;
use vendor\Router;

class Controller
 {


     public $view;


     public function __construct()
     {
         $this->response = new Response();
          $this->router = new Router();
     }


 }