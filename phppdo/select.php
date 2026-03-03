<?php
require 'config.php';

$stmt = $pdo->query("SELECT users.*, orders.product, orders.amount FROM users  JOIN orders  ON users.users_id = orders.users_id");
$users = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>