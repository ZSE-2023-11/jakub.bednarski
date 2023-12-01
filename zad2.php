<?php
$stored_password = password_hash("haselko", PASSWORD_DEFAULT);

$username_input = $_POST['username'];
$password_input = $_POST['password'];

if (password_verify($password_input, $stored_password)) {
    echo "Zalogowano";
} else {
    echo "Złe hasło";
}
?>