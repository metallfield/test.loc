<?php

namespace components;

class View
{


   public static function generate($template_view,  $data = null)
    {
          ob_start();
        if(is_array($data)) {
            extract($data);
        }
      
        include ROOT.'/views/'.$template_view.'.php';
         $content =  ob_get_clean();
        
       return $content;

    }
    public static function redirect($url = '/')
    {
        header('Location: ' . $url);
        die();
    }
}