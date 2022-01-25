<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária | Sobre",$buffer);
    echo $buffer;
?>
<style>
.btn-sobre a{
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
                <p class="breadcrumbs-text">Sobre</p>
            </div>

            <div class="col-md-6 ">
                <h2 class="breadcrumb-title">Sobre</h2>
            </div>
        </div>
    </div>
</section>

<section id="sobre">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="img/sobre-img.jpg">
            </div>

            <div class="col-md-6">
                <h2 class="title">Sobre a</h2>
                <h2 class="subtitle">RT Imobiliária</h2>  
                <div class="section-title-line"></div>
                
                <p class="text">
                Lorem ipsum dolor sit amet, pro ne honestatis sadipscing, detraxit salutatus ne mei. Omnis labores eos ne, scripta facilisi dissentias mel ex, ex vis semper adolescens delicatissimi.
                </p>

                <p class="text">
                Lorem ipsum dolor sit amet, pro ne honestatis sadipscing, detraxit salutatus ne mei. Omnis labores eos ne, scripta facilisi dissentias mel ex, ex vis semper adolescens delicatissimi.
                </p>

                <p class="text">
                Lorem ipsum dolor sit amet, pro ne honestatis sadipscing, detraxit salutatus ne mei. Omnis labores eos ne, scripta facilisi dissentias mel ex, ex vis semper adolescens delicatissimi.
                </p>
            </div>
        </div>
    </div>

</section>

<section id="valores">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="title"><i class="fas fa-check-circle"></i> Missão</h3>
                <p class="text">Lorem ipsum dolor sit amet, pro ne honestatis sadipscing, detraxit salutatus ne mei. Omnis labores eos ne, scripta facilisi dissentias mel ex, ex vis semper adolescens delicatissimi.</p>
            </div>

            <div class="col-md-4">
                <h3 class="title"><i class="fas fa-check-circle"></i> Visão</h3>
                <p class="text">Lorem ipsum dolor sit amet, pro ne honestatis sadipscing, detraxit salutatus ne mei. Omnis labores eos ne, scripta facilisi dissentias mel ex, ex vis semper adolescens delicatissimi.</p>
            </div>

            <div class="col-md-4">
                <h3 class="title"><i class="fas fa-check-circle"></i> Valores</h3>
                <p class="text">Lorem ipsum dolor sit amet, pro ne honestatis sadipscing, detraxit salutatus ne mei. Omnis labores eos ne, scripta facilisi dissentias mel ex, ex vis semper adolescens delicatissimi.</p>
            </div>
        </div>
    </div>
</section>










<?php
    require("cta.php");
    require("footer.php");
?>