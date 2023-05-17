<?php
include 'create.php';
$p = new Table;
$p->createtbl();
$names = $p->all();
$list = $names->fetch_all(MYSQLI_ASSOC);
foreach($list as $r)
{
$p->update($_GET['names'],$_GET['mids'],$_GET['lasts'],$_GET['id']);
}
header('location: form.php');