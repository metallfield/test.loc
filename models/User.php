<?php


namespace models;


use components\Model;

class User extends Model
{

    public static function checkPassword($password)
    {
       return strlen($password) >= 6;
    }
    public function register($params)
    {
        $name = $params['name'];
        $email = $params['email'];
        $password = $params['password'];
        $result = $this->db->row("INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', 'user')");
        return $result;
    }

    public function checkUser($params)
    {



        $email = $params['email'];
        $password = $params['password'];
        $result = $this->db->row("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        return $result;
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId[0];
    }

    public static function isLoged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        else{
            return false;
        }
    }

    public  function getUser($params)
    {
        $id = $params;
         $result = $this->db->row('SELECT * FROM users WHERE id='.$id);

         return $result[0];
    }

    public function isAdmin()
    {
         $userId = self::isLoged();
          $user = $this->getUser($userId['id']);
          if ($user['role'] == 'admin')
          {
              return true;
          }else{
              return false;
          }
    }

    public function editInfo($params)
    {
        $id = $params['id'];
             $name = $params['name'];
            $email = $params['email'];
            return  $this->db->row("UPDATE users SET name = '$name', email = '$email' WHERE id=".$id);

    }
}