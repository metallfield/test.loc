<?php


use components\Response;
use vendor\Router;
use components\Controller;
use models\Main;
class NewsController extends Controller {



    public function index()
	{

        $model = new Main();
        $result = $model->getNews();
       return    $this->response->view('news/index', ['result' => $result]);

	}

	public function show($data)
	{

	    if($data != 0 ) {
	        $model = new Main();
	        $result = $model->getNew($data);

            return $this->response->view('news/view', ['data' => $data, 'result' => $result]);
        }else {
            return $this->response->redirect('/');
        }
	}

	public function create()
    {
        $params = $_GET;
        print_r($params);
    }
}

