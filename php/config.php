<?php
define('ARQUIVO_USUARIOS', __DIR__ . '/dados/usuarios.json');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function carregarUsuarios(): array {
    if (!file_exists(ARQUIVO_USUARIOS)) {
        return [];
    }
    $conteudo = file_get_contents(ARQUIVO_USUARIOS);
    $dados = json_decode($conteudo, true);
    return is_array($dados) ? $dados : [];
}

function salvarUsuarios(array $usuarios): bool {
    $json = json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents(ARQUIVO_USUARIOS, $json, LOCK_EX) !== false;
}

function buscarUsuarioPorEmail(string $email): ?array {
    $usuarios = carregarUsuarios();
    foreach ($usuarios as $usuario) {
        if (strtolower($usuario['email']) === strtolower($email)) {
            return $usuario;
        }
    }
    return null;
}

function criarUsuario(string $nome, string $sobrenome, string $email, string $telefone, string $senha): void {
    $usuarios = carregarUsuarios();

    $novoId = 1;
    foreach ($usuarios as $usuario) {
        if ($usuario['id'] >= $novoId) {
            $novoId = $usuario['id'] + 1;
        }
    }

    $usuarios[] = [
        'id'        => $novoId,
        'nome'      => $nome,
        'sobrenome' => $sobrenome,
        'email'     => $email,
        'telefone'  => $telefone,
        'senha'     => password_hash($senha, PASSWORD_DEFAULT),
    ];

    salvarUsuarios($usuarios);





}
define('ARQUIVO_PROJETOS', __DIR__ . '/dados/projetos.json');

function carregarProjetos(): array {
    if (!file_exists(ARQUIVO_PROJETOS)) {
        return [];
    }
    $conteudo = file_get_contents(ARQUIVO_PROJETOS);
    $dados = json_decode($conteudo, true);
    return is_array($dados) ? $dados : [];
}

function salvarProjetos(array $projetos): bool {
    $pasta = dirname(ARQUIVO_PROJETOS);
    if (!is_dir($pasta)) {
        mkdir($pasta, 0755, true);
    }
    $json = json_encode($projetos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents(ARQUIVO_PROJETOS, $json, LOCK_EX) !== false;
}

function criarProjeto(string $nome, string $categoria, string $ano, string $descricao, array $tecnologias, string $imagem, string $link): void {
    $projetos = carregarProjetos();

    $novoId = 1;
    foreach ($projetos as $projeto) {
        if ($projeto['id'] >= $novoId) {
            $novoId = $projeto['id'] + 1;
        }
    }

    $projetos[] = [
        'id'          => $novoId,
        'nome'        => $nome,
        'categoria'   => $categoria,
        'ano'         => $ano,
        'descricao'   => $descricao,
        'tecnologias' => $tecnologias,
        'imagem'      => $imagem,
        'link'        => $link,
    ];

    salvarProjetos($projetos);
}