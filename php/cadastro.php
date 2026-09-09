<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WeCode | Criar Conta</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="logo">
    <div class="mark">{WC}</div>
    <div class="name">WECODE</div>
    <div class="tagline">Desenvolvimento de Sistemas Web</div>
  </div>

  <div class="card">
    <div class="tab">CRIAR CONTA</div>
    <div class="tab-underline"></div>

    <?php if (!empty($_GET['erro'])): ?>
      <p style="color:#d33; text-align:center; margin-bottom:1rem;">
        <?php echo htmlspecialchars($_GET['erro']); ?>
      </p>
    <?php endif; ?>

    <form method="POST" action="processar_cadastro.php">
      <div class="field-row">
        <div class="field">
          <label for="nome">NOME</label>
          <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
        </div>

        <div class="field">
          <label for="sobrenome">SOBRENOME</label>
          <input type="text" id="sobrenome" name="sobrenome" placeholder="Seu sobrenome" required>
        </div>
      </div>

      <div class="field">
        <label for="email">E-MAIL</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      </div>

      <div class="field">
        <label for="telefone">TELEFONE</label>
        <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
      </div>

      <div class="field">
        <label for="senha">SENHA</label>
        <input type="password" id="senha" name="senha" placeholder="••••••••" required>
      </div>

      <button type="submit" class="btn-acessar">CRIAR CONTA</button>
    </form>

    <hr class="divider">

    <div class="signup">
      Já tem uma conta? <a href="./login.php">Entrar</a>
    </div>
  </div>

  <footer>© 2026 WeCode · Desenvolvimento de Sistemas Web</footer>

</body>
</html>