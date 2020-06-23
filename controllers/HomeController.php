<?php

use components\Controller;
use components\Response;
use vendor\Router;

class HomeController extends Controller
{
     public function index(){
         $data_test = 'hello';
         $result = $this->model->getNews();
        return $this->response->view('home/index', ['data_test' => $data_test, 'result' => $result, 'router' => $this->router], ' 312312312');
        }
}