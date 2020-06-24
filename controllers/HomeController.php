<?php

use components\Controller;
use components\Response;
use vendor\Router;
use models\Main;
class HomeController extends Controller
{
     public function index(){
         $data_test = 'hello';

         return $this->response->view('home/index', ['data_test' => $data_test], ' 312312312');
        }
}