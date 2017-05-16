<?php
  function readFromDb($config,$isDistinct,$whatselected,$from,$where = null)
  {
        // from = "string"
        // where = {
        //{ "where" => {"","",""}
        //  "like" => ""
        //  "oreder By" => {"",""}
        $data = array();
        $sql = "SELECT ";
        if($isDistinct) $sql .= "DISTINCT ";
        for( $i = 0 ; $i<count($whatselected)-1; $i++) {
          $sql .= $whatselected[$i] . ", ";
        }
        $sql .= $whatselected[count($whatselected)-1]." ";
        $sql .= "FROM " . $from . " ";
        if( $where != null)
        foreach ($where as $key => $value) {
            if($value != null)
            {
                $sql .= $key . " ";
                if(is_array($value))
                {
                    foreach ($value as $val) {
                      $sql .= $val . " ";
                    }
                }
                else $sql .= $value . " ";
            }
        }
        $mysqli = new mysqli($config[0],$config[1],$config[2],$config[3]);
        $result = $mysqli->query($sql);
        $data = $result->fetch_all();
        $mysqli->close();
        return $data;
  }
?>
