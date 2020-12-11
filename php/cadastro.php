<?php

 

$login = $_POST['login'];

$senha = MD5($_POST['senha']);

$conexao = new mysqli("localhost", "root", "", "cadastro");

$sql = "select login from usuarios where login = '$login'";

$select = mysqli_query($sql,$conexao);

$array = mysqli_fetch_array($select);

$logarray = $array['login'];



if($logarray == $login){

    echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='../html/administracao-cadastro.html';</script>";

    die();


}else{

    $query = "insert into usuarios (login,senha) values ('$login','$senha')";

    $insert = mysqli_query($query,$conexao);
    
    if($insert){

        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../html/administracao-cadastro.html';</script>";

    }else{

        echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel cadastrar esse usúario');window.location.href='../html/administracao-cadastro.html';</script>";
    }
}

















?>