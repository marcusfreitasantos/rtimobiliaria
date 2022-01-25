<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária",$buffer);
    echo $buffer;

    include("databaseconnect.php");


?>

<style>
.btn-inicio a{
    font-weight: bold;
    color: var(--cor-principal) !important;
}
</style>

<!--SLIDER-->
<section class="slider" class="container-fluid">
    <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                <span class="carousel-controle-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></i></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-controle-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        </button>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="img/banner1.jpg" alt="foto de casa" class="d-block w-100">
                </a>
                    <div class="slide-title">
                            <h2>CASA NA PRAIA GRANDE</h2>
                    </div>
               
            </div>

            <div class="carousel-item">
                <a href="#">
                    <img src="img/banner2.jpg" alt="foto de casa" class="d-block w-100">
                </a>
                    <div class="slide-title">
                            <h2>CASA NA PRAIA GRANDE 2</h2>
                    </div>
            </div>

            <div class="carousel-item">
                <a href="#">
                    <img src="img/banner3.jpg" alt="foto de casa" class="d-block w-100">
                </a>
                    <div class="slide-title">
                            <h2>CASA NA PRAIA GRANDE 3</h2>
                    </div>
            </div>
        </div> 
    </div>

    </section>

<!--PESQUISAR IMÓVEIS-->
<?php include("pesquisar.php"); ?>



<!--LISTA DE IMÓVEIS-->
<section id="imoveis">
    <div class="container">
        <div class="section-title">
            <div class="section-title-line"></div>
            <div class="section-title-content">
                <h3>Imóveis</h3>
                <p>Destaque</p>
            </div>
            <div class="section-title-line"></div>
        </div>


        <div class="row lista-imoveis">

        <?php
        while ($imoveis_dados = mysqli_fetch_array( $imoveis_query_destaque )) 
        {            
           
            include("imoveis-card.php");             

        }
        ?>           
        </div>
        <a href="/imoveis" class="btn btn-primary text-center p-2">Ver Todos</a>
        
    </div>
</section>

<!--BLOG-->
<section id="blog">
    <div class="container">
        <div class="section-title">
            <div class="section-title-line"></div>
            <div class="section-title-content">
                <h3>Últimos</h3>
                <p>Artigos</p>
                </div>
            <div class="section-title-line"></div>
        </div>

        <div class="row">
            <?php include("post-card.php"); ?> 
            <?php include("post-card.php"); ?> 
            <?php include("post-card.php"); ?>
            <?php include("post-card.php"); ?>  
        </div>
        <a href="/imoveis" class="btn btn-primary text-center p-2 mt-3">Ver Todos</a>

    </div>
</section>



<!--BAIRROS-->
<section id="bairros">
    <div class="container">
    <div class="section-title">
            <div class="section-title-line"></div>
            <div class="section-title-content">
                <h3>Bairros em</h3>
                <p>Destaque</p>
                </div>
            <div class="section-title-line"></div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="#" class="bairro-container">
                   <h4 class="bairro-title" style="background: linear-gradient(0deg, rgba(60, 12, 34, 0.7), rgba(50, 12, 34, 0.7)), url(img/blog-img.jpg) center center no-repeat; background-size: cover;">Siqueira Campos</h4>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a href="#" class="bairro-container">
                   <h4 class="bairro-title" style="background: linear-gradient(0deg, rgba(60, 12, 34, 0.7), rgba(50, 12, 34, 0.7)), url(img/blog-img.jpg) center center no-repeat; background-size: cover;">Inácio Barbosa</h4>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a href="#" class="bairro-container">
                   <h4 class="bairro-title" style="background: linear-gradient(0deg, rgba(60, 12, 34, 0.7), rgba(50, 12, 34, 0.7)), url(img/blog-img.jpg) center center no-repeat; background-size: cover;">Centro</h4>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a href="#" class="bairro-container">
                   <h4 class="bairro-title" style="background: linear-gradient(0deg, rgba(60, 12, 34, 0.7), rgba(50, 12, 34, 0.7)), url(img/blog-img.jpg) center center no-repeat; background-size: cover;">Aruana</h4>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a href="#" class="bairro-container">
                   <h4 class="bairro-title" style="background: linear-gradient(0deg, rgba(60, 12, 34, 0.7), rgba(50, 12, 34, 0.7)), url(img/blog-img.jpg) center center no-repeat; background-size: cover;">Jardins</h4>
                </a>
            </div>

            <div class="col-md-4 mb-4">
                <a href="#" class="bairro-container">
                   <h4 class="bairro-title" style="background: linear-gradient(0deg, rgba(60, 12, 34, 0.7), rgba(50, 12, 34, 0.7)), url(img/blog-img.jpg) center center no-repeat; background-size: cover;">Santa Lúcia</h4>
                </a>
            </div>
            
        </div>
    </div>
</section>

<script>
//Carregar slide automaticamente
const btnSlide = document.querySelector(".carousel-control-next");
function carregarSlide(){
    btnSlide.click();
}

setInterval(carregarSlide, 3000);

</script>
<?php
    require("cta.php");
    require("footer.php");
?>


