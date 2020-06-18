<?php

namespace components;

class View
{


   public static function generate($template_view,  $data = null)
    {
        if(is_array($data)) {
            extract($data);
        }

       return include ROOT.'/views/'.$template_view.'.php';
    }
    public static function redirect($url = '/')
    {
        header('Location: ' . $url);
        die();
    }
}