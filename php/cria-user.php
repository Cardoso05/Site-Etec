<?php
$mysqli = new mysqli("localhost","root","","cadastro");

if($mysqli->connect_errno){
    echo "<br>Erro na conexão";
}else{
    echo "<br>Deu certo a conexão";
}


$comando="drop table usuarios";
$mysqli->query($comando);

$comando="create table usuarios(
    id int not null auto_increment,
    nome varchar(200) not null,
    login varchar(30) not null,
    email varchar(100) not null,
    senha varchar(40) not null,
    constraint id_usuario primary key(id));";
$mysqli->query($comando);

$comando="insert into usuarios (nome,login,email,senha) values ('matheus','matheuscardoso','matheus@matheus.com.br','1231321');";

if($mysqli->query($comando)){
    echo "<br>Usuario inserido";
}else{
    echo "<br>Usuario nao inserido".$mysqli->error;
}
echo "<br>".$comando;


?>