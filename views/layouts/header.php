<?php
echo 'its header<br>';
if(isset($_SESSION["msg"]) && !empty($_SESSION["msg"]))
{
    $msg=$_SESSION["msg"];
    echo "<div class='msgbox'>".$msg."</div>";
    unset($_SESSION['msg']); //I have issue with this line.
}
if (isset($_SESSION['user'])){
    echo 'hello '. $_SESSION['user']['name'].'<a href="/logout">logout</a>';

}else{
    echo '<a href="/login">login</a>';
}
echo $content;