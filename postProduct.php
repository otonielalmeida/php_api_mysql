<?php

$_POST = json_decode(file_get_contents('php://input'), true);

header("'Accept': 'application/json', 'Content-Type': 'application/json' ");
include('./DBcontroller.php');

if (isset($_POST['name']) and (isset($_POST['manufacturer']))) {
    $name = $_POST['name'];
    $manufacturer = $_POST['manufacturer'];
    $stock = $_POST['stock'];


    $sql = ("INSERT INTO product 
    (name, manufacturer, stock)
    VALUES ('$name', '$manufacturer', '$stock')");


    $connection = dataBase::connection();
    $statement = $connection->prepare($sql);
    $statement->execute();
}
?>