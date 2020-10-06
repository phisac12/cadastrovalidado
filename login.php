<?php
//Conexão
require_once 'php_action/db_connect.php';
//Sessão
session_start();
//Header
include_once 'includes/header.php';
?>

<?php
if (isset($_POST['btn-entrar'])):
  $erros = array();
  $user = mysqli_escape_string($conexao, $_POST['userLogin']);
  $senha = mysqli_escape_string($conexao, md5(sha1($_POST['senhaLogin'].'Vesomemo')));

  if(empty($user) or empty($senha)):
    $erros[] = "<li>O campo Usuário/Senha precisam ser preenchidos</li>";
  else:
    $sql = "SELECT login FROM users WHERE login = '$user' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0):
      header('Location: home.php');
      $_SESSION['isaac'] = "souza";
    else:
      $erros[] = "<li> Usuário inexistente </li>";

    endif;
  endif;
endif;


?>

<form action="" method="POST">
  <div class="container">
    <div class="row">
      <img src="images/estrela-cadente.jpg" alt="estrela-cadente" class="rounded mx-auto d-block mt-5">
      <div class="col-12">
      
      <?php
        if(!empty($erros)):
            foreach($erros as $erro):
              echo $erro;
        endforeach;
        endif;

      ?>
        <div class="form-group">
          <label for="user">Usuário</label>
          <input type="text" class="form-control" id="user" name="userLogin" placeholder="Digite seu login">
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="user">Senha</label>
          <input type="password" class="form-control" id="senha" name="senhaLogin" placeholder="Digite sua senha">
        </div>
      </div>
    </div>
    <hr>
    <button type="submit" class="btn btn-dark btn-lg" name="btn-entrar">Entrar</button>
    <a href="cadastro.php" class="btn btn-secondary btn-lg">Cadastre-se</a>
  </div>
</form>

<?php
//footer
include_once 'includes/footer.php';

?>