<?php
    $name=$_POST["usuario"];
    $senha=$_POST["senha1"];
    $senha=$_POST["senha2"];
    $cidade=$_POST["cidade"];
    $email=$_POST["email"];
    include("conecta.php");
    
    if(isset($_POST["CADASTRAR"]))
    {
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$senha2','$cep','$cpf','$nome','$sobrenome', '$data_aniversario')" );
        $resultado = $comando->execute();
        header("Location:login.html");
    }

    if(isset($_POST["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM cadastro WHERE email='$email'");
        $resultado = $comando->execute();
        header("Location:pagina_registro_por_emailadministrador.html");
    }

    if(isset($_POST["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE cadastro SET senha='$senha',senha2='$senha2',cep='$cep',cpf='$cpf',nome='$nome',sobrenome='$sobrenome', data_aniversario='$data_aniversario'    WHERE email='$email'");
        $resultado = $comando->execute();
        header("Location:pagina_registro_por_emailadministrador.html");
    }

    if(isset($_POST["listar"]))
    {
        
        header("Location:pagina_registro_por_emailadministrador.php?email=$email");
    }

    if(isset($_POST["inserir2"]))
    {
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$senha2','$cep','$cpf','$nome','$sobrenome', '$data_aniversario')" );
        $resultado = $comando->execute();
        header("Location:p.principal.html");
    }
    




    //echo("$email $senha $senha2 $cep $cpf $nome $sobrenome $data_aniversario ");
?>