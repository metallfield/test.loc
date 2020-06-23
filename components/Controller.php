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
         $this->model = $this->loadModel('main');
         $this->router = new Router();
     }

     public function loadModel($name) {
         $path = '\models\\'.ucfirst($name);
         if (class_exists($path)) {
             return new $path;
         }
     }
 }