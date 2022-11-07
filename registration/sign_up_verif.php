<?php
require_once "../registration/config.php";


$email = addslashes($_POST["email"]);
$password = addslashes($_POST["password"]);
$password_hash = password_hash($password, PASSWORD_BCRYPT);

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sqlUser = "SELECT * FROM user WHERE email = '$email'";
        $user = mysqli_query($link, $sqlUser);

        if ($user && mysqli_num_rows($user) > 0) {
            header("location:" . BASE_URL . "/sign_up.php?add=0");
        } else {


            $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
            $stmt = mysqli_prepare($link, $sql);
            mysqli_stmt_bind_param($stmt, 'ss', $email, $password_hash);

            if (mysqli_stmt_execute($stmt)) {
                header("location:" . BASE_URL . "/sign_up.php?add=1");
            }
        }
    }
} else {
    header("location:" . BASE_URL . "/sign_up.php?error=1");
}

mysqli_close($link);
