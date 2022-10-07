<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="logo.png">
    <title>My Projects </title>
</head>
<body>
    <?php 
    require('header.html')?>
    <p>
    <?php
$mysqli = new mysqli("localhost", "root", "root", "MyPortfolio");
      $myquery = mysqli_query($mysqli,"select * from Project WHERE Enabled = 1;");
?>
<table> <tr><th>Picture :</th>
<th>Title :</th>   <th>Description :</th>  <th> Date created : </th>  <th>Date update :</th>
</tr>

<?php
      while ($row = $myquery->fetch_assoc()) { ?>
<tr>

           <td><img id = "miniimage" src = "<?php echo $row["Picture"]?>"></td>
           <td><?php echo $row["Title"]; ?></td>
           <td><?php echo $row["Description"];?></td>
           <td><?php echo $row["Date_created"]; ?></td>
           <td><?php echo $row["Date_update"]; ?></td>
      </tr>
        <?php } ?> 
    </table>
        
    <?php
    require('footer.html') ?>
</body>
</html>