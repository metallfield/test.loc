<?php

namespace components;

use vendor\Router;

class Response {
    private $content;
    private $status_code;
    private $headers;
    private $extends;

    public function __construct($content = '', $status_code = 200, $headers = []) {
        $this->content      = $content;
        $this->status_code  = $status_code;
        $this->headers      = $headers;

    }
     
    public function setStatusCode($status_code) {
        $this->status_code = $status_code;
    }
     
    public function setHeader($header)
    {

         $this->headers[] = $header;

    }
     
    public function send() {
        header('HTTP/1.1 ' . $this->status_code);
         
        foreach ( $this->headers as $header )
            header($header);
         
        echo $this->content;
    }
    public function view($html, $data = [], $header = ''):self{
        $template = ROOT.'/views/'.$html.'.php';
       $this->setHeader($header);
       $new = clone $this;
        ob_start();
      if(is_array($data)){
            extract($data);
      }
        $this->extends = null;
         require $template;

          $body = ob_get_clean();
          if (!$this->extends)
          {
              $new->content = $body;

              $new->send();
              return $new;
          }
           $new->view($this->extends, ['content' => $body]);
        $new->send();
        return $new;

    }

    public  function redirect($url = '/')
    {
        header('Location: ' . $url);
        die();
    }
}