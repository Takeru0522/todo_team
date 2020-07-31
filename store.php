<?php

require_once('Models/Task.php');

$title=$_POST['title'];
$contents=$_POST['contents'];
$currnetTime=date("Y/m/d H:i:s");
$deadline=$_POST['deadline'];
date("Y/m/d H:i:s",strtotime($deadline));

$task= new Task();
$task->create([$title,$contents,$currnetTime,$deadline]);

header('location:index.php');
exit;