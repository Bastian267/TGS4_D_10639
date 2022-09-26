<?php
include('../db.php'); 
session_start();
session_unset();
header("location: index.php");
?>