<?php
// $dsn='mysql:dbname=newapp;host=localhost';
// $user='root';
// $password='';
// $dbh=new PDO($dsn,$user,$password);


// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $dbh->query('SET NAMES utf8');

$dbh=pg_connect("host=ec2-107-21-233-72.compute-1.amazonaws.com
  dbname=d4ie600704rlj2
  user=bzkssfwiizyfbd
  password=302b20c30e09b7b80aa750ca8c8de6493fa390841971f5554021eda866b6c572");

?>