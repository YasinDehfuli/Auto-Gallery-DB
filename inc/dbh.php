<?php
$dbh = new PDO ("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS)
or die('Connection Error !');