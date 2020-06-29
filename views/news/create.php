<?php
$this->extends = 'layouts/header';
?>
<form action="/news/create" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label for="title">title</label>
    <input type="text" name="title" id="title" required class="form-control">
</div>
    <br>
    <div class="form-group">
    <label for="short_content">short content</label>
    <textarea name="short_content" id="short_content" cols="30" rows="10" required class="form-control">
    </textarea><br>
    </div>
    <div class="form-group">
    <label for="content">content</label>
    <textarea name="content" id="content" cols="30" rows="10" required class="form-control"></textarea><br>
    </div>
    <div class="form-group">
    <label for="author_name">author</label>
    <input type="text" name="author_name" id="author_name" required class="form-control"><br>
    </div>
    <div class="form-group">
    <label for="preview">preview</label>
    <input type="file" name="preview" id="preview" class="form-control-file"><br>
    </div>
    <button type="submit" name="submit">submit</button>


</form>