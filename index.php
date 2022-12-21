<?php
    $login = $_POST["login"]; // "admin"
    $password = $_POST["password"]; // "111"
    if ($login === "admin" && $password === "111") {
        echo "Hello admin";
    }
    echo "<p>Hello world</p>";
?>