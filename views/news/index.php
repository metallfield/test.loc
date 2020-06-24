<?php
echo '<h1>list of news</h1>';
foreach ($result as $res){
    echo '#'.$res['id'];
    echo '<h3><a href="/news/'.$res['id'].'">'.$res['title'].'</a></h3>';
    echo  '<p>'.$res['short_content'].'</p>';
}