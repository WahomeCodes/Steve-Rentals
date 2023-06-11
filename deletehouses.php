<?php
 if (isset($_POST['submit'])) {
    include("connection.php");
   $houseno = mysqli_real_escape_string($conn,$_POST['houseno']);

    if (empty($houseno)) {
        header ("Location: deletehouse.php?signup=emptyInputs");
    }else {
       
            $sql = "DELETE FROM houses WHERE houseNo = '$houseno'";
            mysqli_query($conn, $sql);
            header("Location: deletehouse.php?signup=success"); 
   }
}
else{
die("You did not submit the form");
}

?>