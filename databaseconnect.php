<?php
$servername = "localhost";
$database = "rtimobiliaria";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




// Executa a query desejada
$imoveis_destaque = "SELECT * FROM web4_imoveis, web4_imoveis_fotos WHERE web4_imoveis.codigo = web4_imoveis_fotos.codigo AND web4_imoveis.isDeletado = 'N' AND web4_imoveis.isDestaque = 'S'";
$imoveis = "SELECT * FROM web4_imoveis, web4_imoveis_fotos WHERE web4_imoveis.codigo = web4_imoveis_fotos.codigo AND web4_imoveis.isDeletado = 'N'";



$imoveis_query_destaque = mysqli_query($conn, $imoveis_destaque);
$imoveis_query = mysqli_query($conn, $imoveis);










//mysqli_close($conn);
?>