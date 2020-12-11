<?php

 

$login = $_POST['login'];

$senha = MD5($_POST['senha']);

$conexao = new mysqli("localhost", "root", "", "cadastro");

$sql = "select login from usuarios where login = '$login'";

$select = mysqli_query($sql,$conexao);

$array = mysqli_fetch_row()

















?>