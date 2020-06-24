<?php


namespace components;


class HtmlResponse extends Response
{
    public function __construct($content , $status_code = 200, $headers = [])
    {
        parent::__construct($content, $status_code, $headers = ['content-type' => 'text/html']);

    }



}