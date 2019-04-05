<?php

include_once ('shablon.php');

$content->set('{main_text_header}', 'About Us');
$content->set('{sub_text_header}', 'This is what we do.');

$content->out_content('shablon-header.tpl');

?>