<?php
//Header
include_once 'includes/header.php';
//Sessão
session_start();

if (!isset($_SESSION['isaac'])){

    echo "<script>window.location='login.php';alert('Você precisa estar logado!');</script>";
}

if(isset($_POST['button-off'])){
  session_unset();
  echo "<script>window.location='login.php';alert('Você foi deslogado');</script>";

}

?>
<div class="container">
<nav class="navbar navbar-light bg-warning justify-content-between">
  <a class="navbar-brand" href="#">RaceRodas</a>
  <form action="" method="POST">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="button-off">Deslogar</button>
    </form>
</nav>



</div>


<?php
include_once 'includes/footer.php';
?>