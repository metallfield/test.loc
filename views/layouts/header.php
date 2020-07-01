<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'title';?></title>
    <link rel="stylesheet" href="/public/css/style.css" type="text/css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css" type="text/css">
 </head>
<body class="d-flex flex-column justify-content-between">
    <header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top row" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
       <ul class="navbar-nav w-100 justify-content-around">
   <li class="nav-item">
                <a class="nav-link active" href="/">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news">news</a>
            </li>       <?php if (isset($_SESSION['user'])){?>
            <li class="nav-item">
                <a class="nav-link" href="/account">account</a>
            </li>
            <?php }
                if (isset($_SESSION['user'])){
                   if($_SESSION['user']['role'] == 'admin')
                   {
                        ?>
                            <li class="nav-item">
                <a class="nav-link" href="/admin">admin</a>
            </li><?php
                   }
            }?>
       </ul><?php if (isset($_SESSION['user'])){
    echo '<a href="/logout">logout</a>';

}else{
    echo '<a href="/login">login</a>';
    echo '| <a href="/register" class="text-white"> registration </a>';
         }?>
     </div>  
   </nav>
     <?php  echo '<h2>this is HEADER</h2>';?>
    </header>
<?php
if(isset($_SESSION["msg"]) && !empty($_SESSION["msg"]))
{
    ?>
    <div class="alert alert-warning" role="alert">
    <p><?php echo $_SESSION["msg"];

     ?></p>
    </div>
    <?php
    //I have issue with this line.
}unset($_SESSION['msg']);
?> 
<div class="container content">
<?php
echo $content;
?>
</div>
<footer class="text-center  mt-auto d-flex container-fluid">
    <h2>footer</h2>
<script src="/public/js/jquery.min.js"></script>

<script src="/public/js/bootstrap.min.js"></script>
</footer>
</body>
</html>

