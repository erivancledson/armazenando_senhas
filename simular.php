<?php

$email = 'erivancled@hotail.com';
$senha = '12345';
//verifica primeiro somente o email
$sql = $pdo->prepare("select * from usuarios where email = :email");
$sql->bindValue(":email", email);
$sql->execute();

if($sql->rowCont() > 0){
    //se tem o email retorna os dados de login
    $dados = $sql->fetch();
    //verifica a senha digitada com a senha do banco de dados
    if(password_verify($senha, $dados['senha'])){
        echo "acertou o login";
    }else{
        echo "errou o login";
    }
}

