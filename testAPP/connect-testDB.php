<?php
  $dsn='mysql:dbname=testDB;host=localhost';
  $user='root';
  $password='onefami';
  $dbh=new PDO($dsn,$user,$password);
  $dbh->query('SET NAMES UTF-8');
 ?>
