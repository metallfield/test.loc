<?php

echo '<h1>home page</h1>';
echo $data_test.'<br>';

foreach ($result as $res){
    echo $res['title'].' : '. $res['description'];

}

$url = $router->generate('home');
echo 'hello url:'. $url; ?>

<a href="">home</a>
