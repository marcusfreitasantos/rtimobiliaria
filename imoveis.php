<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária | Imóveis",$buffer);
    echo $buffer;

    include("databaseconnect.php");
?>
<style>
.btn-imoveis a{
    font-weight: bold;
    color: var(--cor-principal) !important;
}
</style>


<section class="breadcrumb">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <a href="/" class="breadcrumbs-link">Início</a>
                <span style="color: white;"> | </span>
                <p class="breadcrumbs-text">Imóveis</p>
            </div>

            <div class="col-md-6 ">
                <h2 class="breadcrumb-title">Imóveis</h2>
            </div>
        </div>
    </div>
</section>


<section class="page-title">
    <div class="container">
        <div class="section-title">
                    <div class="section-title-line"></div>
                    <div class="section-title-content">
                        <h3>Imóveis</h3>
                        <p>Disponíveis</p>
                    </div>
                    <div class="section-title-line"></div>
        </div>
    </div>

</section>

<!--PESQUISAR IMÓVEIS-->
<?php include("pesquisar.php"); ?>



<!--LISTA DE IMÓVEIS-->
<section id="imoveis">
    <div class="container">
        <div class="row lista-imoveis">

        <?php
        while ($imoveis_dados = mysqli_fetch_array( $imoveis_query )) 
        { 
            include("imoveis-card.php"); 
        }


        ?>
                       

                     
        </div>        
    </div>
</section>

<?php
    require("cta.php");
    require("footer.php");
?>