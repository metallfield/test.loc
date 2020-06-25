<?php

?>
<form action="/news/<?php echo $result['id'];?>/edit" method="POST">
    <input type="text" name="id" hidden value="<?php echo $result['id'];?>">
    <label for="title">title</label>
    <input type="text" name="title" id="title" required value="<?php echo $result['title'];?>">
    <br>
    <label for="short_content">short content</label>
    <textarea name="short_content" id="short_content" cols="30" rows="10" required>
        <?php echo $result['short_content'];?>
    </textarea><br>
    <label for="content">content</label>
    <textarea name="content" id="content" cols="30" rows="10" required>
        <?php echo $result['content'];?>
    </textarea><br>
    <label for="author_name">author</label>
    <input type="text" name="author_name" id="author_name" required value="<?php echo $result['author_name'];?>"><br>
    <label for="preview">preview</label>
    <input type="file" name="preview" id="preview"   "><br>
    <button type="submit" name="submit">submit</button>


</form>