<?php
session_start();
echo json_encode([
    'fullname' => $_SESSION['user']['fullname'],
    'login' => $_SESSION['user']['login']
]);
?>