<?php

$arquivo = $_FILES["arquivo"];
$destino = "Uploads/". $arquivo["name"];

if(move_uploaded_file($arquivo["tmp_name"],$destino)){
    echo "Arquivo enviado com sucesso!<br>";
    echo "Nome: ". $arquivo["name"]. "<br>";
    echo "<a href='index.php'>Voltar<a>";
}else{
    echo"Erro ao enviar arquivo.";
}
?>