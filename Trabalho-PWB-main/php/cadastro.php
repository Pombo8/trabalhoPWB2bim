<?php
    include 'loadingPage.php';

    include 'functions.php';
    $conexao=mysqli_connect("18.230.6.129","HT301410X","HT301410X","HT301410X");
    $nomeTabela="HT301410X";
    $nome =$_POST['nome'];
    $nick=$_POST['nick'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $fone=$_POST['fone'];
    $cidade=$_POST['cidade'];
    $foto=$_POST['foto'];
    $data = date("Y-m-d");
    $valores=array($nome,$nick,$email,$senha,$fone,$cidade,$foto,$data);
    //adicionar_a_tabela($conexao,$nomeTabela,$valores);
    $inserir=mysqli_query($conexao,"insert into `usuario`(`nome`, `nick`, `email`, `senha`, `telefone`, `cidade`, `foto`, `datac`) 
    VALUES ('$nome','$nick','$email','$senha','$fone','$cidade','$foto','$data')");

    echo "oi";
?>