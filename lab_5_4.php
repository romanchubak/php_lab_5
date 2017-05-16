<?php
include "readFromDb.php";
include_once "../configs/config_for_lab5.php";
$data = array();
if(isset($_POST["button_for_lab4"])) {
    $myString = $_POST["string_for_lab4"];
    $data = readFromDb(array($link,$username,$password,$dbname),
                      false,
                      array("*"),
                      "subject",
                      array(
                          "WHERE" => array("Name"),
                          "LIKE" => "'%".$myString."%'",
                          "ORDER BY" => null
                      ));
}
?>
