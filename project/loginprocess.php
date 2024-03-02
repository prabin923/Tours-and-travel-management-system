<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["uname"];
    $password = $_POST["password"];

    // Database connection details
    $servername = "localhost"; // Change if your database server is different
    $username = "username"; // Change to your database username
    $password = "password"; // Change to your database password
    $database = "library1"; // Change to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check user credentials
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, redirect to dashboard or any other page
        header("Location: dashboard.php");
    } else {
        // Invalid credentials, handle error (e.g., display error message)
        echo "Invalid username or password";
    }

    // Close connection
    $conn->close();
}
?>
