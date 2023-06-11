<?php
include("connection.php");
$sql = "SELECT * FROM `comments`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    
			

    echo "<h1>Steve Rentals</h1>";
    echo "<table border='1' style='margin:0px;'><tr><th>id</th><th>Name</th><th>phoneNo</th><th>Comment</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["phoneNo"]."</td><td>".$row["Comment"]."</td></tr>";
    }
    echo "</table>";

}else {
    echo "No records found";
}
    
?>