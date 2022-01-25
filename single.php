<?php
    $codigo = $_GET["codigo"];

    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária",$buffer);
    echo $buffer;

    include("databaseconnect.php");

    $imoveis_detalhes = "SELECT *, web4_imoveis_operacoes.Titulo AS Operacao FROM ((web4_imoveis
    INNER JOIN web4_imoveis_fotos ON web4_imoveis.Codigo = web4_imoveis_fotos.Codigo)
    INNER JOIN web4_imoveis_operacoes ON web4_imoveis.CodigoOperacao = web4_imoveis_operacoes.Codigo)
    INNER JOIN web4_imoveis_tipos ON web4_imoveis.CodigoTipo = web4_imoveis_tipos.Codigo WHERE web4_imoveis.Codigo=$codigo";

    $imoveis_query_detalhes = mysqli_query($conn, $imoveis_detalhes);

    mysqli_close($conn);

    
?>


<section class="breadcrumb">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <a href="/" class="breadcrumbs-link">Início</a>
                <span style="color: white;"> | </span>
                <p class="breadcrumbs-text">Imóveis</p>
            </div>

            <div class="col-md-6 ">
                <?php if($imoveis_dados = mysqli_fetch_array( $imoveis_query_detalhes)){
                        ?>
                                <h2 class="breadcrumb-title"><?php echo $imoveis_dados["Nome"]; ?></h2>
                        <?php
                    }
                    ?>
                
            </div>
        </div>
    </div>
</section>




<main>


<?php include("imovel-detalhes.php"); ?>


<?php
    require("cta.php");
    require("footer.php");
?>