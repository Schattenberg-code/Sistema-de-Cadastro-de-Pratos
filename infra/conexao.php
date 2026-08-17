<?php //código php para inclusão no banco de dados, serve como função para usar depois

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_cadastrar_pratos_fixluc";
$conn = new mysqli($host,$user,$pass,$db, 6608);

if($conn->connect_error){
    die("Erro na conexão");
}else{
    echo ("<p> BD: ok </p>");
}
?>