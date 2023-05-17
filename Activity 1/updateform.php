<?php
include "create.php";
$p = new Table;
$p->createtbl();
$names = $p->fetch_names($_GET["id"]);

?>

<form method="GET" action="update.php">
    First Name<br>
    <input type="text" name="names" value="<?php echo $names["first_name"]; ?>"> <br>   
    Middle Name<br>
    <input type="text" name="mids" value="<?php echo $names["middle_name"]; ?>"> <br>   
    Last Name<br>
    <input type="text" name="lasts" value="<?php echo $names["last_name"]; ?>"> <br>    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" ><br>
    <input type="submit" value="Update">
</form>