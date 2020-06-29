<?php
$this->extends = 'layouts/header';
?>
<form action="/news/<?php echo $result['id'];?>/edit" method="post" enctype="multipart/form-data" class="form-group">
    <input type="text" name="id" hidden value="<?php echo $result['id'];?>" >
    <div class="form-group">
    <label for="title">title</label>
    <input type="text" name="title" id="title" required value="<?php echo $result['title'];?>" class="form-control">
    <br> </div>
    <div class="form-group">
    <label for="short_content" >short content</label>
    <textarea name="short_content" id="short_content" cols="30" rows="10" required class="form-control"><?php echo $result['short_content'];?>
   
    </textarea><br>
    </div>
    <label for="content">content</label>
    <textarea name="content" id="content" cols="30" rows="10" required class="form-control">
        <?php echo $result['content'];?>
    </textarea><br>
    <label for="author_name">author</label>
    <input type="text" name="author_name" id="author_name" required value="<?php echo $result['author_name'];?>" class="form-control"><br>
    <label for="preview">preview</label>
    <input type="file" name="preview" id="preview" class="form-control-file"><br>
    <button type="submit" name="submit" class="btn btn-success">submit</button>


</form>