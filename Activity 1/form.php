<?php
include "create.php";
$all = new Table();
$all->createtbl();
$names = $all->all();
$list = $names->fetch_all(MYSQLI_ASSOC);
?>
<form method = "GET" action= "insert.php">
First Name<br>
<input type = "text" name = "name"><br>
Middle Name<br>
<input type = "text" name = "middle"><br>
Last Name<br>
<input type = "text" name = "last"><br>
<br>
<input type = "submit" value = "Insert">
<br>
<br>
<table border = 2>
<td>Id</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>update</td>
<td>delete</td>
<tbody>
  <?php foreach($list as $rows) {?>
  <tr>
     <td> <?php echo $rows['id'] ?> </td>
     <td> <?php echo $rows['first_name'] ?> </td>
      <td> <?php echo $rows['middle_name'] ?> </td>
       <td> <?php echo $rows['last_name'] ?> </td>
     <td> <a href ="updateform.php?id=<?php echo $rows['id'] ?>">update</a>
     <td> <a href ="delete.php?id=<?php echo $rows['id'] ?>">delete</a>
     </tr>
     
     <?php } ?>
     </tbody>
</table>
