<?php
/* Connect to a MySQL database using driver invocation */
try{
    $dsn = 'mysql:dbname=gait;host=127.0.0.1;port=3306';
    $user = 'limao_com_raiva';
    $password = '123456';
    
    $dbh = new PDO($dsn, $user, $password);
}catch(PDOException $e){
    echo "Erro de conexao com o banco de dados";
}
?>