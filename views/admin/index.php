<?php

$this->extends = 'layouts/header';

?>



<table class="table-striped table-dark table">
    <thead>
    <tr>
        <th>id</th>
        <th>preview</th>
        <th>title</th>
        <th>content</th>
        <th>author</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $res): ?>
        <tr>
            <td><?php echo $res['id'];?></td>
            <td><img class="img-fluid" src="/public/images/<?php echo $res['id'];?>.jpeg" alt="" width="150" height="150"></td>
            <td><?php echo $res['title'];?></td>
            <td><?php echo substr($res['content'], 0, 70) ;?></td>
            <td><?php echo $res['author_name'];?></td>
            <td><a href="/news/<?php echo $res['id'];?>/delete" class="btn btn-outline-danger">delete</a></td>
            <td><a href="/news/<?php echo  $res['id'];?>/edit" class="btn btn-outline-warning">edit</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<div class="d-flex justify-content-center mx-center"> <?php echo $pagination->get();?></div>
<a href="/news/create" class="btn btn-outline-info">create new</a>