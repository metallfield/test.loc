<?php


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
?>



<table>
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>author</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $res): ?>
        <tr>
            <td><?php echo $res['id'];?></td>

            <td><?php echo $res['title'];?></td>
            <td><?php echo substr($res['content'], 0, 30) ;?></td>
            <td><?php echo $res['author_name'];?></td>
            <td><a href="/news/<?php echo $res['id'];?>/delete">delete</a></td>
            <td><a href="/news/<?php echo  $res['id'];?>/edit">edit</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="/news/create">create new</a>