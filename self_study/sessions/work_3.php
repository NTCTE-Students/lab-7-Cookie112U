<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    header("Location: work_2.php"); 
    exit();
}
?>
<h2>Вы ввели следующие данные:</h2>
<p><strong>Имя пользователя:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
<p><strong>Пароль:</strong> <?php echo htmlspecialchars($_SESSION['password']); ?></p>
<a href="work_2.php">Вернуться</a>
