<?php

namespace models;

use components\Model;
class Main extends Model
{
    public function getNews() {
        $result = $this->db->row('SELECT id, title, short_content FROM news');
        return $result;
    }

    public function getNew($id)
    {

        $result = $this->db->row('SELECT id, title, short_content FROM news WHERE id ='.$id);
        if ($result){
            return $result;
        }   else{
            echo 'New Not Found!';
        }

    }
}