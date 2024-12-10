<?php
    session_start();
       
    setcookie("username", $_SESSION['username'], time() + (7 * 24 * 60 * 60), "/");
    echo "Cookie salvo com sucesso!";

    header("Location: index.php");
    exit();
?>