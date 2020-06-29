<?php
$this->extends = 'layouts/header';

?>

<form action="/register" method="post" class="border rounded p-4 text-center">
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" required class="form-control-sm">
    <br>
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" required class="form-control-sm">
    <br>
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" required class="form-control-sm">
    </div>
    <button type="submit" name="submit" class="btn btn-block">register</button>
</form>
