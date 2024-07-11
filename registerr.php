<?php
$servername = "localhost";
$username = "mobw7774_user_nazar";
$password = "Nazar123.,";
$dbname = "mobw7774_api_nazar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$response = array();

if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
    $response['message'] = "Registrasi berhasil";
} else {
    $response['success'] = false;
    $response['message'] = "Error: " . $sql . "<br>" . $conn->error;
}

echo json_encode($response);

$conn->close();
?>
