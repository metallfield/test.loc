<?php

use components\Controller;
use components\Response;
use vendor\Router;
use models\Main;
class HomeController extends Controller
{
     public function index(){
         $data_test = 'hello';
         $model = new Main();
         $result = $model->getNews();
         return $this->response->view('home/index', ['data_test' => $data_test, 'result'=>$result], ' 312312312');
        }
}