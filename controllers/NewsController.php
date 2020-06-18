<?php

use components\View;
class NewsController extends  \components\Controller {



    public function actionIndex()
	{
 return  $this->view->generate('news/index');
	}

	public function actionView($data)
	{
	    if($data != 0 ) {

            return $this->view->generate('news/view', $data);
        }else {
            return $this->view->redirect('/');
        }
	}

}

