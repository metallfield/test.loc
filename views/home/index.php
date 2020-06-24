<?php

echo '<h1>home page</h1>';
echo $data_test.'<br>';

  ?>

<form action="/news/create" method="post">
    <label for="title">title</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="short_content">short content</label>
    <textarea name="short_content" id="short_content" cols="30" rows="10">
    </textarea><br>
    <label for="content">content</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
    <label for="author_name">author</label>
    <input type="text" name="author_name" id="author_name"><br>
    <label for="preview">preview</label>
    <input type="text" name="preview" id="preview"><br>
    <button type="submit">submit</button>


</form>
