<?php

use components\Controller;

class HomeController extends Controller
{
     public function actionIndex(){
         return $this->view->generate('home');
}
}