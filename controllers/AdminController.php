<?php

use models\User;
use components\Controller;
use components\Pagination;
use models\Main;
class AdminController extends Controller
{

    public  function  index($page = 1)
    {   $model = new User();
        $model_posts = new \models\Main();
        $result =  $model_posts->getNews($page);
        $count = $model_posts->getAllNews();
        $pagination = new Pagination(count($count), $page, Main::SHOW_BY_DEFAULT , 'page-');

        if ($model->isAdmin())
        {
            $_SESSION['msg'] = 'hello admin';
            return $this->response->view('/admin/index', ['result' => $result, 'pagination' => $pagination]);
        }else{
            return $this->response->redirect('/');
        }
    }
}