<?php

?>
</main>

<footer id="footer">
	<div class="container">
		<div class="row footer-top">
			<div class="col-md-4">
				<img src="img/logo-branco.svg" width="200px" style="padding-bottom: 20px;">
				<p>Há mais de 51 anos protagonista das mudanças no mercado, conquistamos mais de R$ 8 bilhões de valor de vendas desde a abertura de nossas operações.</p>
			</div>


			<div class="col-md-4">
				<h6 class="widget-title">Mapa do Site</h6>
				<ul class="footer-nav navbar-nav">
					<li><a href="<?php $_SERVER['HTTP_HOST']; ?>">Início</a></li>
					<li><a href="<?php $_SERVER['HTTP_HOST']; ?>/sobre">Sobre</a></li>
					<li><a href="<?php $_SERVER['HTTP_HOST']; ?>/imoveis">Imóveis</a></li>
					<li><a href="<?php $_SERVER['HTTP_HOST']; ?>/blog">Blog</a></li>
					<li><a href="<?php $_SERVER['HTTP_HOST']; ?>/contato">Contato</a></li>
					<li><a href="#">Anuncie seu Imóvel</a></li>
				</ul>
			</div>


			<div class="col-md-4 d-flex flex-column justify-content-between">
				<div class="contato-info">
					<h6 class="widget-title">Contato</h6>
					<p><i class="fas fa-phone-square"></i>0800 006 8002  |  (79) 3022-0892</p>	
					<p><i class="fab fa-whatsapp"></i>(79) 99685-5993</p>
					<p class="social-links">
						<a href="#"><i class="fab fa-youtube"></i></a>
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</p>
				</div>

				<div class="contato-info">
					<h6 class="widget-title">Endereço</h6>
					<p><i class="fas fa-map-marker-alt"></i>Av. Ministro Geraldo Barreto Sobral, 1496, Jardins, Aracaju - SE</p>		
				<div>
			</div>
		</div>
	</div>
</footer>

<section class="footer-bottom">
			<p>RT Imobiliária <?php echo date("Y"); ?>. Todos os direitos reservados. Feito com <i class="fas fa-heart"></i> pela <img src="img/r2AgenciaDigital_branco.png" width="30px"></p>
</section>

<!-- Footer Links Libraries -->
    <!-- jQuery -->
    <script type='text/javascript' src='libs/jquery/jquery-1.11.1.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Lightbox -->
	<script type='text/javascript' src='libs/lightbox/js/lightbox.min.js'></script>



    <!-- BOOTSTRAP JS -->
    <script type='text/javascript' src='libs/bootstrap/bootstrap.bundle.js'></script>
	<script type='text/javascript' src='libs/bootstrap/bootstrap.min.js'></script>

		<!-- Main JS -->
		<script type='text/javascript' src='js/scrips.js'></script>




<!--WOW-->
<script src='libs/wow/wow.min.js'></script>
<script>
	new WOW().init();
</script>



<script>
    const mobileMenu = document.querySelector("#header-mobile .navbar");
    const btnMobile = document.querySelector(".btn-mobile-menu");

    btnMobile.addEventListener("click", toggleMobileMenu);

    function toggleMobileMenu(e){
        e.preventDefault();
		if(mobileMenu.classList.contains("show-menu")){
			mobileMenu.classList.remove("show-menu");
			mobileMenu.classList.add("hide-menu");

		}else if(mobileMenu.classList.contains("hide-menu")){
			mobileMenu.classList.remove("hide-menu");
			mobileMenu.classList.add("show-menu");
		}else{
			mobileMenu.classList.add("show-menu");
		}
    }
</script>
    


</body>
</html>
