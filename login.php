<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the submitted username and password from the form
$username = $_POST['Name'];
$password = $_POST['password'];

// Prepare the SQL query to fetch the doctor details
$sql = "SELECT * FROM doctor WHERE Doctor_Name = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Check if any matching rows were found
if (mysqli_num_rows($result) == 1) {
    // Login successful
    echo "Login successful. Redirecting to doctor dashboard...";
    // Perform any additional actions or redirect to the doctor dashboard page
} else {
    // Login failed
    echo "Invalid username or password. Please try again.";
}

// Close the database connection
mysqli_close($conn);
?>
