<?php
    $login = $_POST["login"]; // "admin"
    $password = $_POST["password"]; // "111"
    if ($login === "admin" && $password === "111") {
        echo "Hello admin";
    } else {
        echo "<p>Hello world</p>";
    }
?>