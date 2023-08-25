


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
    <style>
         .voltar {
            background-color: #00008b;
            border-radius: 15px;
            padding: 10px 13px;
            margin-bottom: 25px;
            margin-left: -35px;
            text-decoration: none;
            color: white;
            border: solid 2px #00008b;
            transition: 0.5s;
        }
        .voltar:hover{
            background-color: #00008b3f ;
        }
     
    </style>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
            crossorigin="anonymous"></script>
    <script>

$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

</script>
</head>
<body>
<a href="javascript:history.back()" class="btn btn-link mt-3 voltar">Voltar para a página anterior</a>
<h1 class="text-center">Cadastre-se</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="textr" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Informe seu CNPJ</label>
        <input name="cnpj" type="text" id="cnpj" value=""  maxlength="15" class="form-control" required>
    </div>
    <div class="mb-3">
    <label for="especialidade">Especialidade:</label>
                <select class="form-control" id="especialidade" name="especialidade" required>
                    <option value="comercio">Comércio</option>
                    <option value="servico">Serviço</option>
                    <option value="industria">Indústria</option>
                </select>
    </div>

    <div class="mb-3">
        <label>Digite seu CEP</label>
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Rua</label>
        <input name="rua" type="text" id="rua" size="60" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Bairro</label>
        <input name="bairro" type="text" id="bairro" size="40" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Cidade</label>
        <input name="cidade" type="text" id="cidade" size="40"  class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Estado</label>
        <input name="uf" type="text" id="uf" size="2" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
        
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>