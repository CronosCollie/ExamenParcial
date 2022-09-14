<?php 
/* COMPLETE THIS FILE WITH PHP */
function getFrase() {
    $refran = $_POST['refran'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "refranero";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT sentence FROM refranero where sentence LIKE '$refran%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['sentence'];
        }
    }
    $conn->close();
}
?>