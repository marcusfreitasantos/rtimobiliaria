<div class="col-md-4 mb-3">
                <img src="http://localhost/rtimobiliaria/img/imoveis/1/<?php echo 'G_' . $imoveis_dados['Foto'];   ?>" class="img-fluid" style="height: 300px; object-fit: cover; width: 100%;">
                <h4 class="imovel-title"><?php echo $imoveis_dados["Nome"]; ?></h4>
                <p class="imovel-local"><?php echo $imoveis_dados["EndCidade"]; ?> - <?php echo $imoveis_dados["EndBairro"]; ?></p>
                
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

                <a href="single.php?codigo=<?php echo $imoveis_dados["Codigo"]; ?>" target="_blank"  class="imovel-btn">
                    <span>R$ <?php echo $imoveis_dados["ValorVenda"]; ?></span>
                    <p class="btn btn-primary">SAIBA MAIS</p>
                </a>

            </div> 