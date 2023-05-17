<?php

include "create.php";
$n = new Table();
$n->createtbl();
$n->insertbl($_GET['name'],$_GET['middle'],$_GET['last']);
header('location: form.php');