<?php
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);
    $mysqli = mysqli_connect("localhost","root","","cadastro");
    $query = "select count(login) from usuarios where login like '".$login."';";


    if($result=mysqli_query($mysqli,$query)){
        $row=mysqli_fetch_row($result);
        $has=$row[0];
        if(intval($has)>0){
            echo"<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='../html/administracao-entrar.php';</script>";

            die();
        }
    }

        $comando="insert into usuarios (nome,login,email,senha) values ('".$nome."','".$login."','".$email."','".$senha."');";
        if(mysqli_query($mysqli,$comando)){
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado');window.location.href='../html/administracao-cadastro.php';</script>";
            
            
        }else{
            echo "Erro".$mysqli->error;
        }   


?>