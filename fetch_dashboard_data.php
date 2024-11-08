<?php
// Database credentials
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

// Create a new MySQLi connection
$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query with JOIN to get orders with customer names
$sql = "SELECT o.order_id, c.name AS customer_name, o.product_name, o.price
        FROM orders o
        JOIN customers c ON o.customer_id = c.id";

// Execute the query
$result = $conn->query($sql);

// Array to hold the data
$data = [];

// If there are results, fetch the data into the array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return the data as JSON
echo json_encode($data);
?>
