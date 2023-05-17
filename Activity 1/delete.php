<?php

include "create.php";

$del = new Table();
$del->createtbl();
$del->delete($_GET['id']);
header('location: form.php');