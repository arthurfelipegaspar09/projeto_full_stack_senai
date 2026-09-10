<?php
require_once 'config.php';

// opcional: proteger essa página para só você acessar
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>WeCode | Adicionar Projeto</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="card">
    <div class="tab">NOVO PROJETO</div>

    <?php if (!empty($_GET['erro'])): ?>
      <p style="color:#d33;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
    <?php endif; ?>

    <form method="POST" action="processar_projeto.php" enctype="multipart/form-data">

      <div class="field">
        <label for="nome">NOME DO PROJETO</label>
        <input type="text" id="nome" name="nome" required>
      </div>

      <div class="field">
        <label for="categoria">CATEGORIA</label>
        <input type="text" id="categoria" name="categoria" placeholder="Ex: SISTEMA WEB" required>
      </div>

      <div class="field">
        <label for="ano">ANO</label>
        <input type="text" id="ano" name="ano" value="2026" required>
      </div>

      <div class="field">
        <label for="descricao">DESCRIÇÃO</label>
        <textarea id="descricao" name="descricao" rows="3" required></textarea>
      </div>

      <div class="field">
        <label for="tecnologias">TECNOLOGIAS (separadas por vírgula)</label>
        <input type="text" id="tecnologias" name="tecnologias" placeholder="HTML, CSS, JavaScript" required>
      </div>

      <div class="field">
        <label for="imagem">IMAGEM DO PROJETO</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required>
      </div>

      <div class="field">
        <label for="link">LINK DO PROJETO</label>
        <input type="url" id="link" name="link" placeholder="https://..." required>
      </div>

      <button type="submit" class="btn-acessar">ADICIONAR PROJETO</button>
    </form>
  </div>

</body>
</html>