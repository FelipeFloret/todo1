<?php
require_once("../models/Usuarios.php");
/*
#Receber Variáveis:

$Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$Telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$Email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$Senha=filter_input(INPUT_POST,'Senha',FILTER_SANITIZE_STRING);



#Instanciando a classe:
$ObjCrud=new ClassInsercao($Nome,$Telefone,$Email,$Senha);
$ObjCrud->InserirDB();

echo "<script>
        alert('Cadastro efetuado com sucesso!');
        window.location.href='../index.php';
    </script>";

    */

 $nome = $_POST['nome'];
 $telefone =$_POST['telefone'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];



$usuario = new Usuarios($nome, $telefone, $email, $senha);
$usuario->InserirDB();