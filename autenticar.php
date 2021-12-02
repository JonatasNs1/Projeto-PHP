<?php
require_once("configuracoes/config.php");
require_once("bd/conexao.php");

$login = (string) null; //1 passo declarar as variaveis
$senha = (string) null;//2 passo declarar as variaveis

$login = $_POST['login']; // 3 passo recebe os dados via post do from de login
$senha = md5($_POST['senha']); //4 passo recebe os dados via post do from de login


if($login != "" && $senha != ""){ // 5 passo, fazendo o tratamento 
    $sql = "select *from tblUsuarios where login ='".$login."' and
    senha='".$senha."'";

    $conexao =  conexaoMysql(); //6 passo, chamando a funcao

    // echo($sql);
    // die;
    $select = mysqli_query($conexao,$sql);//7 passo, verificando se retornou alguma coisa

   if($exibirUsuarios= mysqli_fetch_assoc($select)){//8 passo para criar o array e guarda dentro do $rsUsuario  
    session_start(); // ativa o uso de variavel de sessão

    $_SESSION['statusLogin'] = true;
    $_SESSION['nomeUsuario'] = $exibirUsuarios['nome'];
      header('location:indexDash.php'); // permite redirecionar para uma página
    // echo('foi');
    }else{
        echo(LOGIN_MSG_INVALIDO);
    }
}
?>