<?php



use components\Controller;
use models\User;
class UserController extends Controller
{



    public function register()
    {
        if(isset($_POST['submit'])){
            $params = $_POST;
            if (!User::checkPassword($params['password'])){
                $_SESSION['msg'] = 'password should be not less than 6 symbols';
            }
            else{

                $model = new User();
                $model->register($params);
                return $this->response->redirect('/');
            }
        }

        return $this->response->view('/user/register');
    }

    public function login()
    {
        if (isset($_POST['submit']))
        {
            $params = $_POST;
            $model = new User();
            $userId = $model->checkUser($params);
            if ($userId == null)
            { $_SESSION['msg'] = 'wrong email or password';

            }
            else{
                $_SESSION['msg'] = 'login success';
                User::auth($userId);
                return $this->response->redirect('/');
            }
        }
        return $this->response->view('/user/login');
    }

    public function logout()
    {

        unset($_SESSION['user']);
        return $this->response->redirect('/news');
    }

    public function account()
    {
        $user = User::isLoged();
        if ($user){

            return $this->response->view('/user/account',['user' => $user]);
        }else{
            return $this->response->redirect('/');
        }
    }

    public function edit($id)
    {
        if($_SESSION['user']['id'] == $id)
        {
            $model = new User();
            $result = $model->getUser($id);
            if (isset($_POST['submit'])){
                $params = $_POST;
                 $model->editInfo($params);
                 return $this->response->redirect('/account');
            }
            return  $this->response->view('/user/edit', ['result' => $result]);
        }

    }

}