<?php
//Header
include_once 'includes/header.php';
?>


<div class="row">

</div>
<div class="shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center">Cadastre-se</h1>
</div>
<form action="php_action/create.php" method="POST">
    <div class="container">
  <div class="form-group">
    <label for="user">Usuário</label>
    <input type="text" class="form-control" name="user" id="user" placeholder="Digite usuário">
  </div>
  <div class="form-group">
    <label for="pass">Senha</label>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Digite senha">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Digite email">
  </div>
  <div class="form-group">
    <label for="idade">Idade</label>
    <input type="number" class="form-control" name="idade" id="idade" placeholder="Sua idade">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="checkbox">
    <label class="form-check-label" for="checkbox">Aceito os termos</label>
  </div>
  <div class="mt-3">
    <button type="submit" name="btn-cadastrar" class="btn btn-success btn-lg">Cadastrar</button>
    <a href="login.php" class="btn btn-secondary btn-lg">Voltar</a>
    </div>
</form>


<?php
//footer
include_once 'includes/footer.php';

?>