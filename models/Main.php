<?php

namespace models;

use components\Model;
class Main extends Model
{
    public function getNews() {
        $result = $this->db->row('SELECT title, description FROM news');
        return $result;
    }
}