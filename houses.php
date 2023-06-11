<?php
include("connection.php");
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    			
    echo "<h1>Steve Rentals</h1>";
    echo "<table border='1' style='margin:0px;'><tr><th>id</th><th>houseNo</th><th>Occupant</th><th>mobileNo</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["houseNo"]."</td><td>".$row["Occupant"]."</td><td>".$row["mobileNo"]."</td></tr>";
    }
    echo "</table>";

}else {
    echo "No records found";
}
    
?>
