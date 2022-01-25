<section class="imovel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="http://localhost/rtimobiliaria/img/imoveis/1/<?php echo 'G_' . $imoveis_dados['Foto'];   ?>" class="w-100 mb-5" style="height: 600px; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h2 class="title">Descrição</h2>
                <p style="text-align: justify">
                    <?php echo $imoveis_dados["Descricao"]; ?>
                </p>
            </div>
            <div class="col-md-6">
                <h2 class="title">Detalhes</h2>
                <div class="imovel-atrib">
                    <div class="atrib">
                        <span> <?php echo $imoveis_dados["AreaUtil"]; ?>m²</span>
                        <p>Área Total</p>
                    </div>

                    <div class="atrib">
                        <span> 0<?php echo $imoveis_dados["QtdQuartos"]; ?></span>
                        <p>Quartos</p>
                    </div>

                    <div class="atrib">
                        <span> 0<?php echo $imoveis_dados["QtdBanheiros"]; ?> </span>
                        <p>Banheiros</p>
                    </div>
                </div> 
            </div>
<div class="col-md-12"><hr></div>
            <div class="col-md-12">
                <div class="imovel-atrib">
                   <div class="atrib">
                       <p>Operação:</p>
                        <span> <?php echo $imoveis_dados["Operacao"]; ?> </span>
                    </div>

                    <div class="atrib">
                       <p>Tipo:</p>
                        <span> <?php echo $imoveis_dados["Titulo"]; ?> </span>
                    </div>

                    <div class="atrib">
                       <p>Valor:</p>
                        <span> <?php echo $imoveis_dados["ValorVenda"]; ?> </span>
                    </div>

                    <div class="atrib">
                       <p>Taxa de Condomínio:</p>
                        <span> <?php echo $imoveis_dados["TaxaCondominio"]; ?> </span>
                    </div>

                </div>
            </div>
        </div>

</div>




</section>