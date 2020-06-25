<?php

?>
<form action="/news/create" method="POST">
    <label for="title">title</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="short_content">short content</label>
    <textarea name="short_content" id="short_content" cols="30" rows="10" required>
    </textarea><br>
    <label for="content">content</label>
    <textarea name="content" id="content" cols="30" rows="10" required></textarea><br>
    <label for="author_name">author</label>
    <input type="text" name="author_name" id="author_name" required><br>
    <label for="preview">preview</label>
    <input type="file" name="preview" id="preview"   "><br>
    <button type="submit" name="submit">submit</button>


</form>