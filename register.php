<?php
  $currentPage = 'index';
  include_once(__DIR__ . '/components/header.php');
?>

<main class="container pt-5">
    <div class="jumbotron">
        <h1 class="display-4">
            Crie sua conta
        </h1>
        <p class="lead">
            Junte-se a mais nova comunidade de culinária do mundo!
        </p>
    </div>
    <form action="register_post.php" method="post">
        <div class="form-group">
            <label for="name">Digite seu nome</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Digite seu Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar seu emaill com ninguem</small>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Digite seu Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-success">Cadastre-se</button>

    </form>
</main>

<?php
  include_once(__DIR__ . '/components/footer.php');
?>