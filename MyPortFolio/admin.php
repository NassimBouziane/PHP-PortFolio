<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="logo.png">
    <title>Control Panel </title>
</head>
<body>
   
<?php require("header.html")?>
    
    <form name ="project" method="POST" action="admin.php">
       
        <legend class="legend"> Add project </legend>

        

        <label id="label" for="id">id:</label><br>
        <input type="text" id="id" name='id'><br>

        <label id="label" for="Title">Title:</label><br>
        <input type="text" id="Title" name="Title"><br>

        <label id="label" for="Description">Description:</label><br>
        <input type="text" id="Description" name="Description" ><br>

        <label id="label" for="Picture">Picture:</label><br>
        <input type="file" id="Picture" name="Picture" accept="image/png, image/jpg" ><br>

        <label id="label" for="Picture">Date created:</label><br>
        <input type="text" id="Date_created" name="Date_created" ><br>

        <label id="label" for="Description">Date updated:</label><br>
        <input type="text" id="date_uptated" name="date_uptated" ><br>

        <label id="label" for="Description">Enabled:</label><br>
        <input type="text" id="Enabled" name="Enabled" ><br>

        <input type="submit" name="ADD" value="ADD">
       
    </form>
    <form name ="project" method="POST" action="admin.php">    
        <label id="label" for="idremoved">SELECT ID OF THE PROJECT TO DELETE:</label><br>
        <input type="text" id="idremoved" name="idremoved" ><br>
        <input type="submit" name="DEL" value="DELETE">
 </form>
 <?php 
    $connection = mysqli_connect('localhost','root','root','MyPortfolio');
if($_POST['ADD'] == 'ADD') {
    $id = $_POST['id'];
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $Picture = $_POST['Picture'];
    $Date_created = $_POST['Date_created'];
    $date_uptated = $_POST['date_uptated'];
    $Enabled = $_POST['Enabled'];
    //$sql = "INSERT INTO project VALUES('$id','$Title','$Description','$Picture','$Date_created','$date_uptated','$Enabled')";
    $myquery = mysqli_query($connection, "INSERT INTO project VALUES('$id','$Title','$Description','$Picture','$Date_created','$date_uptated','$Enabled')");

}
IF($_POST['DEL'] == 'DELETE'){
    
    $idremoved = $_POST['idremoved'];
        
    $myquery = mysqli_query($connection, "DELETE FROM project WHERE ID = $idremoved ");

}

    require('footer.html'); ?>





</body>
</html>