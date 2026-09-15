<?php
require_once 'config.php';


if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
?>
