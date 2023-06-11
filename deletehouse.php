<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CRUDstyle.css">
</head>
<body>
    <form action="deletehouses.php" method="post">
            <h2>Delete your House here</h2>
            <input type="text" id="text" name="houseno" placeholder="House No"><br>
            <input type="text" name="houseDescription" id="houseDescription" placeholder="houseDescription"><br>
            <button type="submit" name="submit">Submit</button>
            <?php
            include "connection.php";
                
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if (strpos($fullURL, "signup=emptyInputs")== true) {
            echo "<p class='error'>You did not fill in all the fields</p>";
            exit();
        }elseif (strpos($fullURL, "wrongDetails")== true) {
            echo "<p class='error'>Invalid house details</p>";
            exit();
        }
        elseif(strpos($fullURL, "signup=success") == true){
            echo "<p class='message'>You have successfully deleted a house</p>";
            
            exit();
        }
    ?>  
    </form>
    
   
</body>
</html>