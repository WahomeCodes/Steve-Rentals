<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CRUDstyle.css">
</head>
<body>
<?php
echo "<h1>Steve Rentals</h1>";
echo "<h2>My Houses</h2>";

include("connection.php");
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    
    echo "<table border='1' style='margin:0px;'><tr><th>id</th><th>houseNo</th><th>Occupants</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["houseNo"]."</td><td>".$row["Occupants"]."</td></tr>";
    }
    echo "</table>";

}else {
    echo "No records found";
}
    
?>
</body>
</html>