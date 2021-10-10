<?php

session_start();

pre_r($_SESSION);

$_SESSION['role']='student';

pre_r($_SESSION);

session_destroy();
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


?>
<h2> This is page 2</h2>