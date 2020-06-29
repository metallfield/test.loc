<?php
$this->extends = 'layouts/header';
echo '<h1>list of news</h1>';
?>
<div class="row"><?php
foreach ($result as $res){
    echo '<div class="col-4">';
    echo '#'.$res['id'].'<br>';?>
    <img class="" src="/public/images/<?php echo $res['id'];?>.jpeg" alt="" width="100%" height="350">
<?php
    echo '<h3><a href="/news/'.$res['id'].'">'.$res['title'].'</a></h3>';
    echo  '<p>'.$res['short_content'].'</p></div>';

}?>
</div>
<?php
echo $pagination->get();