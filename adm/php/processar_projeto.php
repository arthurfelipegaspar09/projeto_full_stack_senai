<?php
require_once 'config.php';

if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}

$nome        = trim($_POST['nome'] ?? '');
$categoria   = trim($_POST['categoria'] ?? '');
$ano         = trim($_POST['ano'] ?? '');
$descricao   = trim($_POST['descricao'] ?? '');
$tecnologias = trim($_POST['tecnologias'] ?? '');
$link        = trim($_POST['link'] ?? '');

if ($nome === '' || $categoria === '' || $descricao === '' || $tecnologias === '' || $link === '') {
    header('Location: admin_projetos.php?erro=' . urlencode('Preencha todos os campos.'));
    exit;
}

if (!isset($_FILES['imagem']) || $_FILES['imagem']['error'] !== UPLOAD_ERR_OK) {
    header('Location: admin_projetos.php?erro=' . urlencode('Selecione uma imagem válida.'));
    exit;
}

// pasta onde as imagens dos projetos ficam (ajuste o caminho se necessário)
$pastaImagens = __DIR__ . '/../imagens/';

$extensao = strtolower(pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));
$permitidas = ['jpg', 'jpeg', 'png', 'webp', 'avif'];

if (!in_array($extensao, $permitidas)) {
    header('Location: admin_projetos.php?erro=' . urlencode('Formato de imagem não permitido.'));
    exit;
}

$nomeArquivo = uniqid('projeto_') . '.' . $extensao;

if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $pastaImagens . $nomeArquivo)) {
    header('Location: admin_projetos.php?erro=' . urlencode('Erro ao salvar a imagem.'));
    exit;
}

$listaTecnologias = array_map('trim', explode(',', $tecnologias));

criarProjeto($nome, $categoria, $ano, $descricao, $listaTecnologias, $nomeArquivo, $link);

header('Location: portifolio.php?sucesso=' . urlencode('Projeto adicionado!'));
exit;