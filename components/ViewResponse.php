<?php 

namespace components;
 class ViewResponse extends Response
{
    public function __construct($html, $status = 200, $headers = [])
    {
        parent:: __construct(
            $this->createBody($html),
            $status,
            $headers
        );
    }

    public function createBody($html = 'hello')
    {
        ob_start();
        require ROOT.'/views/'.$html.'.php';
         $content =  ob_get_clean();
         
       return $content;
    }
}