<?php

use components\Controller;
use components\Response;

class HomeController extends Controller
{
     public function actionIndex(){
        
        $this->resp = new Response();

        return  $this->resp->view('home/index');
          
       
}
}