<?php
include "readFromDb.php";
include_once "../configs/config_for_lab5.php";
$data = array();
$lecturers = array();
$data = readFromDb(array($link,$username,$password,$dbname),
                  false,
                  array("*"),
                  "subject",
                  array(
                      "where" => null,
                      "like" => null,
                      "ORDER BY" => "NumberOfSemestr"
                  ));
$lecturers = readFromDb(array($link,$username,$password,$dbname),
                        true,
                        array("FirstNameLector", "SecondNameLector"),
                        "subject"
                        );
$lecturers[] = count($lecturers);
?>
