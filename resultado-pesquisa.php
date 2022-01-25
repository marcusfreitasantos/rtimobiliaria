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
$operacao = $_POST['operacao'];
$tipo = $_POST['tipo'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$valorMin = $_POST['valorMin'];
$valorMax = $_POST['valorMax'];
$codRef = $_POST['codRef'];

$result_imoveis = "SELECT * FROM web4_imoveis, web4_imoveis_fotos WHERE web4_imoveis.codigo = web4_imoveis_fotos.codigo AND web4_imoveis.isDeletado = 'N' AND web4_imoveis.CodigoOperacao LIKE '%$operacao%' AND web4_imoveis.CodigoTipo LIKE '%$tipo%' AND web4_imoveis.EndCidade LIKE '%$cidade%' AND web4_imoveis.EndBairro LIKE '%$bairro%' AND web4_imoveis.ValorVenda BETWEEN '$valorMin' AND '$valorMax'";


$resultado = mysqli_query($conn, $result_imoveis);    

mysqli_close($conn);
?>

<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária | Imóveis",$buffer);
    echo $buffer;
?>
<style>
.btn-imoveis a{
    font-weight: bold;
    color: var(--cor-principal) !important;
}
</style>




<section class="page-title">
    <div class="container">
        <div class="section-title">
                    <div class="section-title-line"></div>
                    <div class="section-title-content">
                        <h3>Resultado da</h3>
                        <p>Pesquisa</p>
                    </div>
                    <div class="section-title-line"></div>
        </div>
    </div>

</section>

<!--PESQUISAR IMÓVEIS-->
<?php include("pesquisar.php"); ?>



<section id="imoveis">
    <div class="container">
        <div class="row lista-imoveis">

        <?php
        while($imoveis_dados = mysqli_fetch_array($resultado)){
            if($imoveis_dados > 0){
                
                include("imoveis-card.php"); 
            
            }else{
                echo "Nada foi encontrado";
            }    
        }     


        ?>
                       

                     
        </div>
        <a href="/imoveis" class="btn btn-primary text-center p-2">Ver Todos</a>
        
    </div>
</section>


<?php
    require("cta.php");
    require("footer.php");
?>