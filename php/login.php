<?php

$login = $_POST['login'];

$senha = md5($_POST['senha']);

$mysqli = new mysqli("localhost", "root", "", "cadastro");

$query = "select count(login) from usuarios where login = '".$login."' and senha = '".$senha."';" or die("erro ao selecionar");

if($result=mysqli_query($mysqli,$query)){
    $row=mysqli_fetch_row($result);
    $has=$row[0];
    echo $has;
    if($has == 1){
        header('Location:../html/index.html');
    }else{
        echo"<script language='javascript' type='tect/javascript'>alert('Login e/ou senha incorretos');window.location.href='../html/administracao-entrar.html';</script>";
            
            die();
    }

        
}      
        


?>