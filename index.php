<?php

     require_once("lib/config.php");


     if (!empty($_GET["action"])) {
     	$action = $_GET["action"];
     }else{
     	$action = "home";
     }//end validate $_GET["action"]

     if (is_file("controller/".$action."Controller.php")) {
     	require_once("controller/".$action."Controller.php");
     }else{
     	require_once("controller/errorController.php");
     }//end validate




 ?>