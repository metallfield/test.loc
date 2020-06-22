<?php

use components\View;
use components\Response;
class NewsController extends  \components\Controller {



    public function actionIndex()
	{
		$this->resp = new Response();

 return  $this->resp->view('news/index');
	}

	public function actionView($data)
	{
		$this->resp = new Response();

	    if($data != 0 ) {

            return $this->resp->view('news/view', $data);
        }else {
            return $this->resp->redirect('/');
        }
	}

}

