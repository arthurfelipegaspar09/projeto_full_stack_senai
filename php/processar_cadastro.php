<?php
require_once 'config.php';

$nome      = trim($_POST['nome'] ?? '');
$sobrenome = trim($_POST['sobrenome'] ?? '');
$email     = trim($_POST['email'] ?? '');
$telefone  = trim($_POST['telefone'] ?? '');
$senha     = $_POST['senha'] ?? '';

if ($nome === '' || $sobrenome === '' || $email === '' || $telefone === '' || $senha === '') {
    header('Location: cadastro.php?erro=' . urlencode('Preencha todos os campos.'));
    exit;
}

if (strlen($senha) < 6) {
    header('Location: cadastro.php?erro=' . urlencode('A senha deve ter pelo menos 6 caracteres.'));
    exit;
}

if (buscarUsuarioPorEmail($email)) {
    header('Location: cadastro.php?erro=' . urlencode('Este e-mail já está cadastrado.'));
    exit;
}

criarUsuario($nome, $sobrenome, $email, $telefone, $senha);

header('Location: login.php?sucesso=' . urlencode('Cadastro realizado! Você já pode entrar.'));
exit;