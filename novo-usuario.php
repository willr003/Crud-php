<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
   
</head>
<body>
<h1 class="text-center">Cadastre-se</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="textr" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Informe seu CNPJ</label>
        <input type="number" name="cnpj" class="form-control">
    </div>
    <div class="mb-3">
    <label for="especialidade">Especialidade:</label>
                <select class="form-control" id="especialidade" name="especialidade">
                    <option value="comercio">Comércio</option>
                    <option value="servico">Serviço</option>
                    <option value="industria">Indústria</option>
                </select>
    </div>

    <div class="mb-3">
        <label>Digite seu CEP</label>
        <input type="number" name="cep" class="form-control">
    </div>
    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="bairro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="rua" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado</label>
        <input type="text" name="estado" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
        
</form>
</div>
</body>
</html>