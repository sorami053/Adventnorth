<?php
$conn = mysqli_connect("localhost","root","", "crudwithimages");
// Include your database connection file here if it's not included yet
// require_once 'your_database_connection_file.php';

if(isset($_GET['id'])) {
    // Get the ID from the URL parameter
    $id = $_GET['id'];

    // Your database connection - assuming $conn is already established

    // SQL query to delete the row with the specified ID
    $query = "DELETE FROM users WHERE id = $id";

    // Perform deletion
    if(mysqli_query($conn, $query)) {
        // If deletion is successful, redirect to a page or perform any other actions you need
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "ID parameter is missing!";
}
?>