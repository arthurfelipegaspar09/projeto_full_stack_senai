<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WeCode | Entrar</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="logo">
    <div class="mark">{WC}</div>
    <div class="name">WECODE</div>
    <div class="tagline">Desenvolvimento de Sistemas Web</div>
  </div>

  <div class="card">
    <div class="tab">ENTRAR</div>
    <div class="tab-underline"></div>

    <?php if (!empty($_GET['erro'])): ?>
      <p style="color:#d33; text-align:center; margin-bottom:1rem;">
        <?php echo htmlspecialchars($_GET['erro']); ?>
      </p>
    <?php endif; ?>

    <?php if (!empty($_GET['sucesso'])): ?>
      <p style="color:#2a2; text-align:center; margin-bottom:1rem;">
        <?php echo htmlspecialchars($_GET['sucesso']); ?>
      </p>
    <?php endif; ?>

    <form method="POST" action="processar_login.php">
      <div class="field">
        <label for="email">E-MAIL</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      </div>

      <div class="field">
        <label for="senha">SENHA</label>
        <input type="password" id="senha" name="senha" placeholder="••••••••" required>
      </div>
      <a href="../perguntas.html">
      <button type="submit" class="btn-acessar">ACESSAR</button>
      </a>
      
    </form>

    <div class="forgot">
      <a href="#">ESQUECEU A SENHA?</a>
    </div>

    <hr class="divider">

    <div class="signup">
      Não tem uma conta? <a href="./cadastro.php">Criar agora</a>
    </div>
  </div>

  <footer>© 2026 WeCode · Desenvolvimento de Sistemas Web</footer>

</body>
</html>