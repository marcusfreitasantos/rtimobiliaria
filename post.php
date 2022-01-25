<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária",$buffer);
    echo $buffer;

    include("databaseconnect.php");


?>
<section class="breadcrumb">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <a href="/" class="breadcrumbs-link">Início</a>
                <span style="color: white;"> | </span>
                <p class="breadcrumbs-text">Blog</p>
            </div>

            <div class="col-md-6 ">
                <h2 class="breadcrumb-title">Ideias de decoração para um Natal tropical</h2>
            </div>
        </div>
    </div>
</section>

<section class="imovel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="img/blog-img.jpg" class="w-100 mb-5" style="height: 600px; object-fit: cover;">
            </div>
            <div class="col-md-12">
                <h2 class="title">Ideias de decoração para um Natal tropical</h2>
                <p style="text-align: justify" class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean metus est, ornare id sapien non, consectetur faucibus ligula. Aenean tristique lacus ac sodales suscipit. Sed at viverra felis. Phasellus sit amet diam a leo elementum eleifend. Vivamus sapien nibh, pharetra id vulputate nec, cursus eget nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur dapibus metus quis congue malesuada. Fusce suscipit lacinia tempor. Etiam id pretium neque. Sed vel libero ac magna pretium pretium.</p>

                <p style="text-align: justify" class="mb-4">
                Sed in leo porttitor, faucibus purus efficitur, lacinia est. Aliquam finibus non dui sit amet sagittis. Donec ultricies blandit ligula, quis sodales enim tempus a. Aenean dignissim mauris non augue commodo, ac gravida tellus venenatis. Duis tellus justo, porta in nunc volutpat, dapibus hendrerit augue. Fusce porta scelerisque nisl non feugiat. Nam erat arcu, sollicitudin nec justo a, dapibus pretium enim. Mauris condimentum molestie urna, nec ultricies quam laoreet eget. Aliquam a molestie mi. Duis lobortis a ipsum a condimentum. Nulla non metus lacus. Fusce mauris lacus, placerat ac molestie vel, maximus ac est. Etiam volutpat feugiat odio vitae vestibulum. Etiam fermentum sapien nisl, ut interdum erat posuere quis.</p>

                <p style="text-align: justify" class="mb-4">Ut sollicitudin nunc magna, at rutrum orci consequat id. Nunc a dui ut mi placerat aliquet in in dolor. Nam et nisi ut dui congue dapibus ut a metus. Morbi viverra feugiat turpis tincidunt eleifend. Nam mattis, lectus eget viverra condimentum, orci massa scelerisque ex, quis pharetra sapien orci nec ex. In nec odio magna. Vivamus tincidunt libero rhoncus dui dictum dictum.
                </p>
            </div>
           
            
        </div>

</div>




</section>

<?php
    require("cta.php");
    require("footer.php");
?>