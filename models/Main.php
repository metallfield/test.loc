<?php

namespace models;

use components\Model;
class Main extends Model
{
    public function getNews() {
        $result = $this->db->row('SELECT * FROM news');
        return $result;
    }

    public function getNew($id)
    {

        $result = $this->db->row('SELECT * FROM news WHERE id ='.$id);
        if ($result){
            return $result[0];
        }   else{
            return false;
        }

    }

    public function createNew($params)
    {
        $title = $params['title'];
        $short = $params['short_content'];
        $content = $params['content'];
        $author = $params['author_name'];
        $preview = $params['preview'];
       return $this->db->row("INSERT INTO news (title, short_content, content, author_name, preview) VALUES ('$title', '$short', '$content', '$author', '$preview')");
    }

    public function deleteNew($id)
    {
         return $this->db->row("DELETE FROM news WHERE id=".$id);
    }

    public function editNew($params)
    {

        $title = $params['title'];
        $short = $params['short_content'];
        $content = $params['content'];
        $author = $params['author_name'];
        $preview = $params['preview'];
        return $this->db->row("UPDATE news SET title = '$title', short_content = '$short', content = '$content', author_name = '$author', preview = '$preview' WHERE id=".$params['id']);
    }
}