<?php
/* header("Access-Control-Allow-Origin: *"); header("Access-Control-Allow-Headers: *"); */
include "./DBcontroller.php";
if (isset($_GET['get_data'])) {
    $result = database::execSQL("SELECT * FROM product");
    /* $result = json_encode($result); */

    return $result;
}




?>