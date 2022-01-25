<?php
?>

<section id="pesquisar-imovel">
    <div class="container">
        <div class="form-title">Encontre seu Imóvel</div>
        <form method="POST" action="http://localhost/rtimobiliaria/resultado-pesquisa.php">
            <div class="row">
                
                <div class="col-md-2 mb-2">
                    <input type="number" class="form-control w-100" id="im-operacao" name="operacao" aria-describedby="im-operacao" placeholder="Operação">
                </div>
                
                <div class="col-md-2 mb-2">
                    <input type="number" class="form-control w-100" id="im-tipo" name="tipo" aria-describedby="im-tipo" placeholder="Tipo">
                </div>
               
                <div class="col-md-2 mb-2">
                    <input type="text" class="form-control w-100" id="im-cidade" name="cidade" aria-describedby="im-cidade" placeholder="Cidade">
                </div>
                
                <div class="col-md-2 mb-2">
                    <input type="text" class="form-control w-100" id="im-bairro" name="bairro" aria-describedby="im-bairro" placeholder="Bairro">
                </div>
                
                <div class="col-md-2 mb-2">
                    <input type="number" class="form-control w-100" id="im-min" name="valorMin" aria-describedby="im-min" placeholder="Valor Mín.">
                </div>
                
                <div class="col-md-2 mb-2">
                    <input type="number" class="form-control w-100" id="im-max" name="valorMax" aria-describedby="im-max" placeholder="Valor Máx.">
                </div>

            </div>
      

            <div class="row im-ref">
                <div class="col-md-10" style="padding-right: 0;">
                    <input type="number" class="form-control w-100 pt-3 pb-3" style="background: #eee; border: none; border-radius: 0;" name="codRef" id="im-ref" placeholder="Código de Referência">
                </div>

                <div class="col-md-2" style="padding-left: 0;">
                    <button type="submit" class="btn btn-primary  w-100 pt-3 pb-3" style="margin: 0; border: none;">PESQUISAR</button>
                </div>
            </div>
           
        </form>
    </div>
</section>