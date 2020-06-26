<?php


namespace components;


class Template
{
    public function __construct()
    {

    }

    public  function view($html, $params = []):string
    {
        ob_start();
        if(is_array($params)){
            extract($params);
        }

        require ROOT.'/views/'.$html.'.php';

        $body = ob_get_clean();

        return $body;
    }
}