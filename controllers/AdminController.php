<?php

use models\User;
use components\Controller;
class AdminController extends Controller
{

    public  function  index()
    {   $model = new User();
        $model_posts = new \models\Main();
        $result = $model_posts->getNews();
        if ($model->isAdmin())
        {
            $_SESSION['msg'] = 'hello admin';
            return $this->response->view('/admin/index', ['result' => $result]);
        }else{
            return $this->response->redirect('/');
        }
    }
}