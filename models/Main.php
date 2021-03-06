<?php

namespace models;

use components\Model;
class Main extends Model
{
    const SHOW_BY_DEFAULT = 4;

    public function getAllNews()
    {
        $result = $this->db->row('SELECT * FROM news');
        return $result;
    }
    public function getNews($page = 1) {
        $limit = Main::SHOW_BY_DEFAULT;

        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $result = $this->db->row("SELECT * FROM news ORDER BY id DESC LIMIT $offset, $limit");
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
        $result = $this->db->row("INSERT INTO news (title, short_content, content, author_name) VALUES ('$title', '$short', '$content', '$author')");
          return $result;
       
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
   
        return $this->db->row("UPDATE news SET title = '$title', short_content = '$short', content = '$content', author_name = '$author' WHERE id=".$params['id']);
    }
}