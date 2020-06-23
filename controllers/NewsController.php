<?php


use components\Response;
use vendor\Router;
class NewsController extends  \components\Controller {



    public function index()
	{
       return    $this->response->view('news/index');

	}

	public function show($data)
	{
	    if($data != 0 ) {
            return $this->response->view('news/view', ['data' => $data]);
        }else {
            return $this->response->redirect('/');
        }
	}

}

