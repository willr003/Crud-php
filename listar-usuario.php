<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<a href="javascript:history.back()" class="btn btn-link mt-3 voltar">Voltar para a página anterior</a>
<h1>Lista de Fornecedores</h1> 
<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn -> query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0){
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
             print "<th> # </th>";
             print "<th> Nome </th>";
             print "<th> CNPJ </th>";
             print "<th> Especialidade </th>";
             print "<th> CEP </th>";           
             print "<th> Editar</th>";
             
            print"</tr>";
        while ($row = $res -> fetch_object()) {
            print "<tr>";
             print "<td>" . $row->id; "</td>";
             print "<td>" . $row->nome; "</td>";
             
             print "<td>" . $row->cnpj; "</td>";
             print "<td>" . $row->especialidade; "</td>";
             print "<td>" . $row->cep; "</td>";
             
             print"<td>

                    <div class='grid text-center'>
                        <button onclick=\"location.href='?page=editar&id=".$row->id . "'; \" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id . "';
                        }else{
                            false;
                        } \" class='btn btn-danger'>Excluir</button>
                    </div>

             </td>";
            print"</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger>Não encontrou resultados!</p>";
    }

?>
</body>
</html>