<?php
$this->extends = 'layouts/header';

?>
<form action="/login" method="post">

    <label for="email">Email</label>
    <input type="email" name="email" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="submit">login</button>
</form>