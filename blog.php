<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária | Blog",$buffer);
    echo $buffer;
?>

<style>
.btn-blog a{
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
                <p class="breadcrumbs-text">Blog</p>
            </div>

            <div class="col-md-6 ">
                <h2 class="breadcrumb-title">Blog</h2>
            </div>
        </div>
    </div>
</section>

<!--BLOG-->
<section id="blog">
    <div class="container">
        <div class="section-title">
            <div class="section-title-line"></div>
            <div class="section-title-content">
                <h3>Nosso</h3>
                <p>Blog</p>
                </div>
            <div class="section-title-line"></div>
        </div>

        <div class="row">
            <?php include("post-card.php"); ?>
            <?php include("post-card.php"); ?>
            <?php include("post-card.php"); ?>
            <?php include("post-card.php"); ?>
            

             
        </div>
    </div>
</section>










<?php
    require("cta.php");
    require("footer.php");
?>