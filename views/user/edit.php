<?php
$this->extends = 'layouts/header';
?>
<form action="/user/<?php echo $result['id']?>/edit" method="post">
    <input type="text" name="id" id="" value="<?php echo $result['id'];?>" hidden>
    <input type="text" name="name" value="<?php echo $result['name'];?>" >
    <input type="email" name="email" value="<?php echo $result['email'];?>" >
    <button type="submit" name="submit">edit info</button>
</form>
