<?php
$this->extends = 'layouts/header';

?>

<form action="/register" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="submit">register</button>
</form>
