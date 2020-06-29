
<?php

$this->extends = 'layouts/header';
echo $data;

if (isset($result)){
    ?>
<img class="" src="/public/images/<?php echo $result['id'];?>.jpeg" alt="" width="100%" height="350">
<?php
    echo '<h1>#'.$result['id'].' '. $result['title'].'</h1><br><p>'.$result['short_content'].'</p><br><span>'.$result['author_name'].'</span>';
}

 ?>

 </body>
</html>