<!DOCTYPE html>
<html lang="en">

<?php


include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reportType = $_POST['reportType'];
    $message = $_POST['message'];

    $add_product_query = mysqli_query($conn, "INSERT INTO `data` (name, email, reportType, message) VALUES ('$name', '$email', '$reportType', '$message')");
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting and Feedback</title>
    
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Report and Feedback Form</h2>

    <form action="#" method="post" id="feedbackForm">
        <label for="name">Name and Surname:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="reportType">Report Type:</label>
        <select id="reportType" name="reportType">
            <option value="bug">Bug</option>
            <option value="feedback">General Feedback</option>
        </select>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit" name="submit" id="submit" value="submit" >Submit</button>
    </form>

   

</body>
</html>