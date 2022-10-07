<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="logo.png">
    <title>About BOUZIANE Nassim</title>
</head>
<body>
    <?php 
    require('header.html')?>
    <h1> About me</h1>
    <p>
    <?php
$mysqli = new mysqli("localhost", "root", "root", "MyPortfolio");
      $myquery = mysqli_query($mysqli,"select * from me");

      while ($row = $myquery->fetch_assoc()) { ?>
          <span>Firstname : </span><?php echo $row["Firstname"]; ?></br>
          <span>Lastname : </span><?php echo $row["Lastname"]; ?></br>
          <span>Email : </span><?php echo $row["Email"];?></br>
          <span>Phone : +33</span><?php echo $row["Phone"]; ?></br>
          <span>Address : </span><?php echo $row["Address"]; ?>, <?php echo $row["City"]; ?></br>
          <span>Country : </span><?php echo $row["Country"]; ?></br>
          <span>Birth date : </span><?php echo $row["Birth_date"]; ?></br>
          <span>Description : </span><?php echo $row["Description"]; ?></br>
        <?php } ?> </p>
    <?php
    require('footer.html') ?>
</body>
</html>