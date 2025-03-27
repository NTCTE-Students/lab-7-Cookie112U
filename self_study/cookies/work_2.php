<?php
setcookie("user", "guest", time() + 86400, "/");
print("Новое значение куки 'user': " . ($_COOKIE['user'] ?? 'не установлено'));