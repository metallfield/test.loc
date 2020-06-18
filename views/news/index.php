<?php
echo '<h1>list of news</h1>';
function generate($template_view,  $data = null)
{    $template_view = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $template_view);
    if(is_array($data)) {
        extract($data);
    }
    ob_start();
    include(ROOT.'/views/'.$template_view.'.php');
    return ob_end_clean();
}