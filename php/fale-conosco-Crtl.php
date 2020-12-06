<?php 

    include '../php/fale-conosco-classe.php';
    
    $faleconosco = new faleconosco();

    $faleconosco->nome = $_POST['nome'];
    $faleconosco->email = $_POST['email'];
    $faleconosco->mensagem = $_POST['texto'];

    If (isset($_POST['incluir'])) {
        $faleconosco->incluir();
    }
?>