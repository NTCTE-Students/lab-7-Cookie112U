<?php
setcookie("preferences", "dark_mode", time() + 604800, "/");
print("Значение куки 'preferences': " . ($_COOKIE['preferences'] ?? 'не установлено'));
