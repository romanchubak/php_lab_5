<?php
  //INSERT INTO `subject` (`id`, `Name`, `NumberOfSemestк`, `CountOfHours`, `FormControl`, `FirstNameLector`, `SecondNameLector`) VALUES (NULL, '1', '1', '1', '1', '1', '1');
 include "readFromDb.php";
 include_once "../configs/config_for_lab5.php";


 $data=array();


 if(isset($_POST["Add"])){
     $NameOfSubject=$_POST["NameOfSubject"];
     $NumberOfTerm = $_POST["NumberOfTerm"];
     $CountOfHours = $_POST["CountOfHours"];
     $FormOfControl = $_POST["FormOfControl"];
     $FirstNameOfLector = $_POST["FirstNameOfLector"];
     $SecondNameOfLector = $_POST["SecondNameOfLector"];
        if($NameOfSubject!="" && ctype_alpha($NameOfSubject)&&
         $NumberOfTerm !="" && is_numeric($NumberOfTerm)&&
         $CountOfHours !="" && is_numeric($CountOfHours) &&
         $FormOfControl !="" &&  ctype_alpha($FormOfControl)&&
         $FirstNameOfLector !="" && ctype_alpha($FirstNameOfLector)&&
         $SecondNameOfLector != ""&& ctype_alpha($SecondNameOfLector)) {
            $mysqli = new mysqli($link,$username,$password,$dbname);
            $mysqli->query("INSERT INTO subject ( Name , NumberOfSemestr,
            CountOfHours, FormControl, FirstNameLector, SecondNameLector)".
            " VALUES ('".$NameOfSubject."', ".
                       "'".$NumberOfTerm."', ".
                       "'".$CountOfHours."', ".
                       "'".$FormOfControl."', ".
                       "'".$FirstNameOfLector."', ".
                       "'".$SecondNameOfLector."')");
            $mysqli->close();
            $data = readFromDb(array($link,$username,$password,$dbname),
            false,array("*"),"subject");

        }
 }
 else $data = readFromDb(array($link,$username,$password,$dbname),
 false,array("*"),"subject");
 ?>
