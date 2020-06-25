<?php

?>

<h3>Hello <?php echo $user['name']?></h3>
<span>Your email <?php echo $user['email']?></span>
<a href="/user/<?php echo $user['id']?>/edit" style="border: 1px solid blue; padding: 6px">edit information</a>