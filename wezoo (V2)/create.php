<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar perfil</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required>
      </div>
      <div class="form-group">
        <label for="text">Senha:</label>
        <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a sua senha" required>
      </div>
      <div class="form-group">
        <label for="observations">Função na Wezoo:</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira sua função na WeZoo." rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
