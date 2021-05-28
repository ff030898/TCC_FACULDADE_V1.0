<!DOCTYPE html>
	<html lang="pt-br" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>SOE</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				
			  				<a href="#"><span class="lnr lnr-envelope"></span> <span class="text">soe@gmail.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="{{ route('home') }}" STYLE="font-size: 35px; color: #fff; font-weight: 900;">&nbsp;<i class="fa fa-graduation-cap"></i><strong>&nbsp;SOE</strong><!--<img src="img/logo.png" alt="" title="" />--></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{ route('home') }}">Home</a></li>
			          <li><a href="#">Quem Somos?</a></li>
			          <li><a href="{{ route('adm') }}">Funcionários</a></li>
					  <li><a href="{{ route('adm') }}">Professores</a></li>
					  <li class="menu-has-children"><a href="#">Pais e Alunos</a>
			            <ul>
			              <li><a href="{{ route('adm') }}">Area do Aluno</a></li>
			              <li><a href="{{ route('adm') }}">Area dos Pais</a></li>
			            </ul>
			          </li>	
                      
			          <li><a href="#">Contato</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								O QUE É SOE?
							</h1>
							<p class="pt-10 pb-10" style="color: #fff;">
								SOE significa Sistema de Organização Escolar. Sua finalidade é automatizar e facilitar grande 
								parte dos processos que são feitos por instituições educacionais públicas e privadas, tais como: notas, 
								faltas e pagamentos além de outras opções que estarão disponíveis para facilitar a rotina administrativa 
								da escola.
							</p>
							<a href="{{ route('adm.escola.adicionar') }}" class="primary-btn text-uppercase">Cadastre sua escola</a>
							
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Planos</h4>
								</div>
								<div class="desc-wrap">
									<p>
										30 dias para testar
									</p>
									<a href="#">Confira</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Novidades</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Fique pro dentro das novidades 
									</p>
									<a href="#">Confira</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Como Usar?</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Faça download do manual de uso do SOE
									</p>
									<a href="#">Baixar PDF</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Escolas Cadastradas no SOE</h1>
								<p>Acompanhe todas as escolas que fazem parte deste projeto</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<?php
                            for($i = 1; $i <= 9; $i++){
							echo("
							<div class='single-popular-carusel'>
								<div class='thumb-wrap relative'>
									<div class='thumb relative'>
										<div class='overlay overlay-bg'></div>	
										<img class='img-fluid' src='img/escolas/00".$i.".jpg' alt=''>
									</div>
																	
								</div>
								<div class='details'>
									<a href='#'>
										<h4>
											Escola 0".$i."
										</h4>
									</a>
									
								</div>
							</div>	

							");
							}
							?>

						</div>
						
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			
			

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Cadastre-se para<br>
								acompanhar o desempenho escolar do seu filho.
							</h1>
							<p style="color: #fff;">
								Um sistema de organização escolar precisa conseguir integrar os setores acadêmico, 
								pedagógico e financeiro de uma escola. Além disso, ajudar por exemplo, a acompanhar 
								a evolução das notas de uma turma, acompanhar o fluxo financeiro no caso de escolas 
								privadas tais como pagamentos de matriculas, taxas e garantir que a escola trabalhe 
								de maneira organizada e eficiente na automatização de processos e rotinas administrativas. 
								Assim, é possível resolver os principais problemas de uma escola e economizar tempo em todas
								as tarefas da secretaria e dos professores. 
							</p>
							
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Preencha o Formulário</h4>		
								<input type="text" class="form-control" name="name" placeholder="Nome" required>
								<input type="text" class="form-control" name="cpf_pai" placeholder="CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'" required>
								<input type="email" class="form-control" name="email" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
								<input type="password" class="form-control" name="senha" placeholder="Senha " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" required>
								<input type="text" class="form-control" name="cpf_aluno" placeholder="CPF DO ALUNO" required>				
								<button class="primary-btn text-uppercase" style="background-color: rgb(78,115,223); font-weight: bold;">Cadastrar</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
			
		
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Últimas Noticias</h1>
								<p>fique por dentro de todas as novidades</p>
							</div>
						</div>
					</div>					
					<div class="row">


						<?php
						for($n = 1; $n<=4; $n++){
						echo("
						<div class='col-lg-3 col-md-6 single-blog'>
							<div class='thumb'>
								<img class='img-fluid' src='img/noticias/00".$n.".jpg' alt=''>								
							</div>
							<p class='meta'>24 Outubro, 2019  |  <a href='#'>Administrador</a></p>
							<a href='blog-single.html'>
								<h5>Noticia sobre o SOE 00".$n."</h5>
							</a>
							
							<a href='#' class='details-btn d-flex justify-content-center align-items-center' 
							style='background-color: rgb(78,115,223);' ><span class='details'>Detalhes</span>
							<span class='lnr lnr-arrow-right'></span></a>		
						</div>
						");
						}
						?>
						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
			

		
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Links Uteis</h4>
								<ul>
									<li><a href="#">Professor</a></li>
									<li><a href="#">Aluno</a></li>
									<li><a href="#">Pais</a></li>
									
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Outros Links</h4>
								<ul>
									<li><a href="#">Quem Somos?</a></li>
									<li><a href="#">Mais Informações</a></li>
									<li><a href="#">Contato</a></li>
									
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Como Usar?</h4>
								<ul>
									<li><a href="#">Planos</a></li>
									<li><a href="#">Manual</a></li>
									<li><a href="#">Regras</a></li>
									
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Recursos</h4>
								<ul>
									<li><a href="#">Importar</a></li>
									<li><a href="#">Gerar PDF</a></li>
									<li><a href="#">Gerar Planilhas</a></li>
									
								</ul>								
							</div>
						</div>																		
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Noticias</h4>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Digite seu Email" required type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit" style="background-color: rgb(78,115,223); font-weight: bold;">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
							</div>
						</div>											
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy 2019 Todos os Direitos Reservados. <br>Créditos para 
							<a target="_blank" href="https://colorlib.com/wp/template/education/">Colorlib</a>
							e <a target="_blank" href="http://www.freepik.com"> Freepik </a>
                        </p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	



			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>