<?php
$password = "25252525";
$hash = password_hash($password, PASSWORD_BCRYPT);
echo "Hash generado: " . $hash;
?>