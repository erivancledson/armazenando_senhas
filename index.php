<?php 
//SENHA, TIPO DE CRIPTOGRAFIA
$hash = password_hash("123@qwe", PASSWORD_BCRYPT);
echo $hash;


//verificar a senha quando ele for fazer login
$password = '1234'; //senha que ele fez o login
//é igual  a senha que ta no banco de dados ele compara
if(password_verify($password, $hash)){
    echo "acerto";
}else{
    echo "erro";
}