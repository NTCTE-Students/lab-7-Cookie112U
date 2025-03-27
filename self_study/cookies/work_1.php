<?php
setcookie("user", "admin", time() + 86400, "/");
if (isset($_COOKIE['user'])) {
    print("Куки 'user' установлены: " . $_COOKIE['user']);
} else {
    print("Куки 'user' не установлены");
}
