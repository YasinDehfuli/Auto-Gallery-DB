<?php

require 'inc/dbh.php';
$sql = "INSERT INTO `autogallery` (`brand`, `model`, `color`, `date`) 
                        VALUES (:brand, :model, :color, :date );";
$stm = $dbh->prepare($sql);
$stm->execute($_REQUEST);
header('location:DateBase.php');
//print_r($_REQUEST);