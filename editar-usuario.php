<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
</head>
<body>

<?php 
    $sql =  "SELECT * FROM usuarios WHERE id=" .$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>

<h1 class="text-center">Editar usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?> ">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value=" <?php print $row->nome; ?> " class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value=" <?php print $row->email; ?> " class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha"  class="form-control" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
        
</form>
</body>
</html>