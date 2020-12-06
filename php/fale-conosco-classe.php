<?php


    class faleconosco{
        public $email;
        public $nome;
        public $mensagem;


        public function incluir(){
            $sql = "insert into mensagem(email,nome,mensagem) value ('$this->email','$this->nome','$this->mensagem')";
            $conexao = new mysqli("localhost", "root", "", "fale_conosco");
            mysqli_query($conexao, $sql);
            $conexao->close();
            header('Location: ../html/index.html');
        }
    }



?>