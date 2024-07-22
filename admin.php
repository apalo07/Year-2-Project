<?php


include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reportType = $_POST['reportType'];
    $message = $_POST['message'];

    $add_product_query = mysqli_query($conn, "SELECT FROM `data` (name, email, reportType, message) VALUES ('$name', '$email', '$reportType', '$message')");
}

$sql = "SELECT * FROM `data`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br> Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Report Type: " . $row["reportType"] . "<br>";
        echo "Message: " . $row["message"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>