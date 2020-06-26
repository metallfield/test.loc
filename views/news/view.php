
<?php

$this->extends = 'layouts/header';
echo $data;

if (isset($result)){
    echo '<h1>#'.$result['id'].' '. $result['title'].'</h1><br><p>'.$result['short_content'].'</p>';
}

 ?>

 </body>
</html>