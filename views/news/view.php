<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>single new</h1>
<?php
echo $data;
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
if (isset($result)){
    echo '<h1>#'.$result['id'].' '. $result['title'].'</h1><br><p>'.$result['short_content'].'</p>';
}

 ?>

 </body>
</html>