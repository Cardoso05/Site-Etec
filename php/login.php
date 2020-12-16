<?php
session_start();

$login = $_POST['login'];

$senha = md5($_POST['senha']);

$mysqli = new mysqli("localhost", "root", "", "cadastro");

$query = "select count(login) from usuarios where login = '".$login."' and senha = '".$senha."';" or die("erro ao selecionar");

if($result=mysqli_query($mysqli,$query)){
    $row=mysqli_fetch_row($result);
    $has=$row[0];
    echo $has;
    if($has == 1){

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location:../html/espaco-aluno-principal.php');
    
    }else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../html/administracao-entrar.html';</script>";
            
            die();
    }

        
}      
        


?>