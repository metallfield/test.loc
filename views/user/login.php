<?php
if(isset($_SESSION["msg"]) && !empty($_SESSION["msg"]))
{
    $msg=$_SESSION["msg"];
    echo "<div class='msgbox'>".$msg."</div>";
    unset($_SESSION['msg']); //I have issue with this line.
}
?>
<form action="/login" method="post">

    <label for="email">Email</label>
    <input type="email" name="email" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="submit">login</button>
</form>