<?php
// Incluindo arquivo de conexão
include("config.php");

// Recuperando valores
$id = (int) $_POST["id"];
$type = addslashes($_POST["type"]);
$cookie = $_COOKIE["voted".$id]; 
// Se o cookie ainda não foi setado
if (!isset($cookie))
{
    // Incrementa o voto da frase
    $query = mysql_query("UPDATE vote SET ".$type." = ".$type."+1 WHERE id = ".$id."");
    // Se for um sucesso a query
    if ($query) 
    {
        // Seta um cookie
        setcookie("voted".$id."", true, time()+60*60*24*6004);
        // Retorna false, ou seja, sucesso
        echo false;
    }
    //$cookie = $_COOKIE["voted".$id];
    // Se houver erro na query 
    else 
    {
        echo "Problemas no servidor.";
    }
}
// Se já houver um cookie
else
{
    echo "Você já votou nessa frase.";
}
?>
