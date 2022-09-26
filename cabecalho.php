<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./bootstrap.min.css" />




    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">

  <img src="./logo php.png" alt="Bootstrap" width="90" height="48"></img>

    <a class="navbar-brand" href="#">Meu Projeto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./usuarios.php">Usuário</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastrar Usuário</a></li>
            <li><a class="dropdown-item" href="#">Cadastrar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cadastrar Produto</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href ="./produtos.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href ="./clientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href ="./disciplinas.php">Disciplinas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
<div class="container">
