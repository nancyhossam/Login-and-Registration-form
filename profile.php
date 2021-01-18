
<?php 
  

include("connection.php");
$result = mysqli_query($conn,"SELECT name,description FROM dept");
session_start();

;

  ?> 
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css"></head>
  <body>
  <h2>Hello, <?php echo "welcome ".$_SESSION['name']." To your profile!!"; ?></h2>
    <form>
  <table class="pure-table-odd">
<tr>
<td>Name</td>
<td>Description </td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["description"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
</form>
  </body>
</html>


             


