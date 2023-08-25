


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forn Tech</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    .nav {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-weight: bold">Forn Tech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="?page=novo">Novo usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?page=listar">Lista Usuário</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Conteúdo das diferentes páginas -->
<div class="container">
  <div class="row">
    <div class="col mt-5">

      <?php
      include("config.php");
      $page = @$_REQUEST["page"];
      switch ($page) {
        case 'home':
          include("home.php");
          break;
        case "novo":
          include("novo-usuario.php");
          break;
        case "listar":
          include("listar-usuario.php");
          break;
        case "salvar":
          include("salvar-usuario.php");
          break;
        case "editar":
          include("editar-usuario.php");
          break;

          
      }
      ?>
      <script>
        var hideButton = document.getElementById("hideButton");
        var content = document.querySelector(".content");

        hideButton.addEventListener("click", function() {
            content.classList.add("hidden");
        });
    </script>

    </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>