﻿
 <?php
        $servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "sga";
        
        $con = mysqli_connect($servidor, $usuario, $senha, $dbname);
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $telefone = $_POST['telefone'];
      
        
        mysqli_query($con, "insert into aluno (nome, matricula, telefone)"
                . "values ('$nome', '$matricula', '$telefone')");
            
                echo $nome;
                echo $matricula;
                echo $telefone;
?>

Cadastro Efetuado, Aguarde, você está sendo redirecionado para pagina Inicial!
<meta http-equiv='refresh' content='3; index.php'/>