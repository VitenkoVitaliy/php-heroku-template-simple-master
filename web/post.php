<?php
session_start();

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: index.php");
} else {
    echo "Ошибка: имя пользователя не было отправлено.";
}
?>