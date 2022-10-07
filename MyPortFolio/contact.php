<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="logo.png">
    <title>Contact </title>
</head>
<body>
   
<?php require("header.html")?>
    
    <form>
       <fieldset class="fieldset">
        <legend class="legend"> Personal informations</legend>
        <label id="label" for="Ciivlity">civility</label>
        <input type="radio" id="input" name="contactform" value ="H"required>
        <label id="label1" for="Sexe">Female</label>
        <input type="radio" id="input" name="contactform" value ="F"required>
        <label id="label1" for="Sexe">Male</label><br>

        <label id="label" for="Name">Firstname:</label><br>
        <input type="text" id="input" name="contactform" placeholder ="Complete this field" required><br>

        <label id="label" for="Name">Lastname:</label><br>
        <input type="text" id="input" name="contactform" placeholder ="Complete this field" required><br>
        <label required id="label" for="Email">Email:</label><br>
        <input type="email" id="input" name="contactform" placeholder ="Complete this field" required><br>
        <label id="label" for="phonenumber" id="Number" name="contactform">Phone Number:</label><br>
        <input type ="number" id ="input" name="Number" min="1" max="1000 000 000" placeholder ="Complete this field" required>
       </fieldset>
       <fieldset class="fieldset">
        <legend class ="legend">Message</legend>
        <label  for="Subject">Choose a subject:</label><br>
        <select required name ="Subject" id="input" required>
            <option value="">Complete this field</option>
            <option value="Work">Work proposal</option>
            <option value="Hello">Just saying hello</option>
            <option value="Rendez-date">Rendez-vous</option>
        </select>
        <br>
        <label id="label" for="Date">Current Date:</label><br>
        <input type="date" id="input"name="Date" required><br>

        <label id="label" for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5" cols="73"></textarea>
       </fieldset>
       <input class ="submit" type="submit" value="SEND IT">
    </form>
    <?php 
    require('footer.html') ?>
</body>
</html>