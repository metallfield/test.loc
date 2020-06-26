<?php


use components\Response;
use vendor\Router;
use components\Controller;
use models\Main;
use components\Pagination;
class NewsController extends Controller {



    public function index($page = 1)
	{

        $model = new Main();
        $result = $model->getNews($page);
        $count = count($model->getAllNews());
         $pagination = new Pagination($count, 1, Main::SHOW_BY_DEFAULT , 'page-');
       return $this->response->view('news/index', ['result' => $result, 'pagination' => $pagination]);

	}

	public function show($data)
	{


	        $model = new Main();
	        $result = $model->getNew($data);
            if ($result){
                return $this->response->view('news/view', ['data' => $data, 'result' => $result]);
            }else{
                return  $this->response->redirect('/news');
            }


	}

	public function createPage(){
        return $this->response->view('/news/create');
    }

	public function create()
    {
    if(isset($_POST['submit'])){
    $params = $_POST;
    $model = new Main();
    $model->createNew($params);
    $_SESSION['msg'] = 'create success!';
    $_SESSION['msg_type'] = 'success';
    return $this->response->redirect('/admin');
     }
    }

    public function delete($id)
    {
        $_SESSION['msg'] = 'post was deleted';
        $_SESSION['msg_type'] = 'warninig';
         $model = new Main();
        $model->deleteNew($id);
        return $this->response->redirect('/admin');
    }

    public function editPage($id)
    {
        $model = new Main();
        $result = $model->getNew($id);
        return $this->response->view('/news/edit', ['result' => $result]);
    }

    public function edit()
    {
        $_SESSION['msg'] = 'post edited';
        $_SESSION['msg_type'] = 'alert';
        $params = $_POST;

        $model = new Main();
        $model->editNew($params);
        return $this->response->redirect('/admin');
     }
}

