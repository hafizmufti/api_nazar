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

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

$response = array();

if ($result->num_rows > 0) {
    $response['success'] = true;
    $response['message'] = "Login berhasil";
} else {
    $response['success'] = false;
    $response['message'] = "Username atau password salah";
}

echo json_encode($response);

$conn->close();
?>
