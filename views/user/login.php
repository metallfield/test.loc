<?php
$this->extends = 'layouts/header';

?>
<form action="/login" method="post" class="border rounded p-4 text-center">
<div class="form-group">
    <label for="email">Email</label><br>
    <input type="email" name="email" required class="form-control-sm">

</div>
    <div class="form-group">
    <label for="password">Password</label>
    <br>
    <input type="password" name="password" required class="form-control-sm">
    </div>
    <button type="submit" name="submit" class="btn-block btn-outline-info">login</button>
</form>