<?php 
    switch ($_REQUEST ["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //md5 serve para não expor a senha no banco de dados

            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (
                '{$nome}', '{$email}', '{$senha}')"; 

                $res = $conn->query($sql);
                if ($res==true) {
                    echo "<script>alert('Você foi cadastrado!');</script>";
                    echo "<script>location.href='?page=listar'</script>";
                }else {
                    echo "<script>alert('Não foi possível cadastrar...');</script>";
                    echo "<script>location.href='?page=listar'</script>";
                }
            break;
            
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true) {
                echo "<script>alert('Editado com sucesso!');</script>";
                echo "<script>location.href='?page=listar'</script>";
            }else {
                echo "<script>alert('Não foi possível editar...');</script>";
                echo "<script>location.href='?page=listar'</script>";
            }
            break; 

          case'excluir':
            $sql ="DELETE FROM usuarios WHERE id=" .$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true) {
                echo "<script>alert('Excluído com sucesso!');</script>";
                echo "<script>location.href='?page=listar'</script>";
            }else {
                echo "<script>alert('Não foi possível excluir...');</script>";
                echo "<script>location.href='?page=listar'</script>";
            }
            break;
        default:
            # code...
            break;
    }


?>