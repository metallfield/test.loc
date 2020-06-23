<?php


namespace components;
use components\DB;

class Model
{
     public $db;

     public function __construct()
     {
         $this->db = new DB();
     }
}