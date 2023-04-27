<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "Здравствуйте, " . $_SESSION['username'] . "!<br>";
    echo "<a href='exit.php'>Выйти</a>";
} else {
    ?>
    <html>
    <body>
    <h1>О авторе</h1>
    <p>Меня зовут Виталий. Я WEB-разработчик.</p>
    <h1>Форма ввода имени пользователя</h1>
    <form action="post.php" method="post">
        <input type="text" name="username" placeholder="Введите имя пользователя">
    <input type="submit" value="Отправить">
    </form>
    </body>
    </html>
<?php
}
?>