<?php
require_once 'config.php';

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($email === '' || $senha === '') {
    header('Location: login.php?erro=' . urlencode('Preencha e-mail e senha.'));
    exit;
}

$usuario = buscarUsuarioPorEmail($email);

if ($usuario && password_verify($senha, $usuario['senha'])) {

    $_SESSION['usuario_id']   = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];

    header('Location: ../perguntas.html');
    exit;
} else {
    header('Location: login.php?erro=' . urlencode('E-mail ou senha inválidos.'));
    exit;
}