<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addhouse</title>
    <link rel="stylesheet" href="CRUDstyle.css">
</head>
<body>
<?php
 if (isset($_POST['submit'])) {
    include("connection.php");
    $houseNo = mysqli_real_escape_string($conn,$_POST['houseno']);
    $housePrice = mysqli_real_escape_string($conn,$_POST['houseprice']);
    $Occupant = mysqli_real_escape_string($conn,$_POST['occupant']);
    $houseDescription = mysqli_real_escape_string($conn,$_POST['houseDescription']);

    if (empty($houseNo)|| empty($Occupant) || empty($houseDescription) || empty($housePrice)) {
        header ("Location: addhouses.php?signup=emptyInputs");
    }else {
       
            $sql = "INSERT INTO houses (houseNo, housePrice, Occupants, houseDescription) VALUES ('$houseNo', '$housePrice', '$Occupant','$houseDescription');";

            mysqli_query($conn, $sql);
            header("Location: addhouses.php?signup=success"); 
        }
}
else{
die("You did not submit the form");
}

?>
</body>
</html>