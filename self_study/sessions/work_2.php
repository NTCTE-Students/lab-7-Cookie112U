<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password']; 
    header("Location: work_3.php"); 
    exit();
}
?>
<form method="post">
    <input type="text" name="username" required placeholder="Имя пользователя">
    <input type="password" name="password" required placeholder="Пароль">
    <button type="submit">Войти</button>
</form>
