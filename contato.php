<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","RT Imobiliária | Contato",$buffer);
    echo $buffer;
?>

<style>
.btn-contato a{
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
                <p class="breadcrumbs-text">Contato</p>
            </div>

            <div class="col-md-6 ">
                <h2 class="breadcrumb-title">Contato</h2>
            </div>
        </div>
    </div>
</section>


<!--CONTATO-->
<section id="contato">
    <div class="container">
        <div class="section-title">
            <div class="section-title-line"></div>
            <div class="section-title-content">
                <h3>Fale</h3>
                <p>Conosco</p>
            </div>
            <div class="section-title-line"></div>
        </div>

        <form method="POST" action="mail.php">
            <div class="row">
                
                <div class="col-md-12 mb-3">
                    <label for="nome">Nome<span style="color:red;">*</span></label>
                    <input type="text" class="form-control w-100 obrigatorio" id="nome" name="nome" required aria-describedby="nome" placeholder="Seu nome">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="email">E-mail<span style="color:red;">*</span></label>
                    <input type="email" class="form-control w-100 obrigatorio" id="email" name="email" required aria-describedby="email" placeholder="E-mail">
                </div>
               
                <div class="col-md-6 mb-3">
                    <label for="tel">Telefone:</label>
                    <input type="text" class="form-control w-100" id="tel" aria-describedby="telefone" name="tel" placeholder="Tel.:">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="assunto">Assunto:</label>
                    <select class="form-select" aria-label="Assunto" name="assunto">
                        <option selected disabled>Assunto</option>
                        <option value="Dúvidas">Dúvidas</option>
                        <option value="Elogios">Elogios</option>
                        <option value="Sugestões">Sugestões</option>
                        <option value="Reclamação">Reclamação</option>
                    </select>
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control w-100" id="mensagem" aria-describedby="mensagem" name="mensagem" placeholder="Mensagem" cols="33" rows="5"></textarea>
                </div>   
            </div>

            <div class="col-md-2" style="padding-left: 0;">
                    <button type="submit" class="btn btn-primary  w-100 p-2" style="margin: 0;">ENVIAR</button>
            </div>
        </form>

    </div>
</section>




<script>
    const btn = document.querySelector("form button");
    const inputNome = document.querySelector("#nome");
    const inputEmail = document.querySelector("#email");
    const form = document.querySelector("form");
    const formInputs = document.querySelectorAll(".obrigatorio");
    const inputs = Array.from(formInputs);

    btn.addEventListener("click", showMessage);

    function showMessage(e){
        //e.preventDefault();
     
        inputs.forEach((item) => {
            if(item.value.length == 0){
                inputNome.style.border = "2px solid red";
                inputEmail.style.border = "2px solid red";
            }else{
                form.style.display = "none";
            }
        })
        
        
      
        
    }
</script>



<?php
    require("cta.php");
    require("footer.php");
?>