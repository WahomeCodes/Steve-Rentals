<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CRUDstyle.css">
</head>
<body>
    <form action="addhouse.php" method="post">
            <h2>Add your House here</h2>
            <input type="text" id="text" name="houseno" placeholder="House No"><br>
            <input type="number" id="text" name="houseprice" placeholder="House price"><br>
            <input type="text" id="text" name="occupant" placeholder="Occupants"><br>
            <input type="text" name="houseDescription" id="houseDescription" placeholder="houseDescription"><br>
            <button type="submit" name="submit">Submit</button>

    <?php
            include "connection.php";
                
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if (strpos($fullURL, "signup=emptyInputs")== true) {
            echo "<p class='error'>You did not fill in all the fields</p>";
            exit();
        }elseif(strpos($fullURL, "signup = Invalidemail")== true){
            echo "<p class='error'>You typed an invalid email</p>";
            exit();
        }elseif(strpos($fullURL, "signup=invalidnames")== true){
            echo "<p class='error'>First name and last name must be valid names</p>";
            exit();
        }elseif(strpos($fullURL, "signup=invaliduser")== true){
            echo "<p class='error'>You typed in an invalid username</p>";
            exit();
        }elseif (strpos($fullURL, "invalidCarDetails")== true) {
            echo "<p class='error'>Invalid car details!</p>";
            exit();
        }elseif (strpos($fullURL, "wrongemail")== true) {
            echo "<p class='error'>Invalid email!</p>";
            exit();
        }elseif (strpos($fullURL, "invalidID")== true) {
            echo "<p class='error'>Invalid National ID</p>";
            exit();
        }elseif (strpos($fullURL, "wrongDetails")== true) {
            echo "<p class='error'>Invalid User details</p>";
            exit();
        }
        elseif(strpos($fullURL, "signup=success") == true){
            echo "<p class='message'>You have successfully added a house</p>";
            
            exit();
        }
    ?>  
                
        
    </form>
</body>
</html>