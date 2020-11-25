<?php require("connect.php") ?>
<?php


if (isset($_POST)) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];



    $query = "INSERT INTO `contact` (`id`, `name`, `message`, `email`) VALUES (NULL, '$name', '$message', '$email')";

    $sent = mysqli_query($con, $query);
    if ($sent) {
        header("location: gracias.html");
    } else {
        echo "mail not sent";
    }
} else {
    echo "nothing";
}
