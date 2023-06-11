<?php
include("connection.php");
$sql = "SELECT * FROM payments";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    echo "<h1>Steve Rentals</h1>";
    echo "<table border='1' style='margin:0px;'><tr><th>Id</th><th>Occupant</th><th>HouseNo</th><th>Month</th><th>Year</th><th>Phone</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["Occupant"]."</td><td>".$row["HouseNo"]."</td><td>"
        .$row["Month"]."</td><td>".$row["Year"]."</td><td>".$row["Phone"]."</td></td></tr>";
    }
    echo "</table>";

}else {
    echo "No records found";
}
    
?>
