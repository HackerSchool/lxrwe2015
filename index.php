<!DOCTYPE html>
<html>
<head>
	<title>LX Reactor Winter Edition 2015</title>
	<meta charset="UTF-8">
	<meta property="og:site_name" content="LX Reactor Winter Edition 2015" />
	<meta property="og:title" content="LX Reactor Winter Edition 2015" />
	<meta property="og:url"	content="http://lxreactor.com" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="pt_PT" />
	<meta property="og:image" content="http://lxreactor.com/img/logo.png" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@hackerschoolist" />

	<script src="./js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<script src="./js/faq.js"></script>
	<script src="./js/slides.js"></script>
	<!-- fontawesome icons -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<link rel="icon" href="./favicon.ico" type="image/x-icon">
	<!-- analytics -->
	<?php if(!isset($_GET['notrack'])) include_once("analyticstracking.php"); ?>
</head>

<body>
<!--	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=338147406310178&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));
	</script> -->
	
	<a id="inicio"></a>

	<div id="page">
		<div class="menu_simple" style="position: fixed;">
			<ul>
				<li><a href="#inicio">LX Reactor WE 2015</a></li>
				<li><a href="#projectos">Uma amostra de 2014</a></li>
				<li><a href="#info">Informações</a></li>
				<li><a href="#candidatura">Candidatura</a></li>
				<li><a href="#contactos">Contactos</a></li>
				<li><a href="http://lxreactor.com/~lxreactor.daemon/lxreactor-2014/" target="_blank">LX Reactor 2014</a></li>
			</ul>
		</div>

		<div id="main">
			<h1 id="title">Winter is coming...</h1>
			<div id="logo-wrap">

				<img id="logo" src="./img/logo.png" />
			</div>

<!--			<h2 style="width=100%;text-align:center;font-family:sans-serif;"><a href="lxreactor-2014">ver LX Reactor 2014</a></h2>-->
			<div class="text">

				<h2>LX Reactor Winter Edition 2015</h2>

				<p>A HackerSchool traz-te mais uma edição do LX Reactor Winter Edition já em Fevereiro. Temos algumas novidades preparadas para ti!</p>
				
				<hr>
				<a id="projectos"></a>
				<h2>Uma amostra de 2014</h2>
				<div id="cf7" class="shadow">
					<img class='opaque' src="./img/FotosProjectos/quadcopter.jpg" />
					<img src="./img/FotosProjectos/ctrino1.jpg" />
					<img src="./img/FotosProjectos/energyBrick.jpg" />
					<img src="./img/FotosProjectos/impressora3D.jpg" />
					<img src="./img/FotosProjectos/passaporte1.png" />
					<img src="./img/FotosProjectos/hackerSupply.jpg" />
					<img src="./img/FotosProjectos/torreDeLEDs.jpg" />
					<img src="./img/FotosProjectos/chaveNAH.jpg" />
					<img src="./img/FotosProjectos/fenixQA.png" />
				</div>
				<p id="cf7_controls">
					<span class="selected">Quadcopter</span>
					<span>c-trino</span>
					<span>EnergyBrick</span>
					<span>Impressora 3D</span>
					<span>Passaporte</span>
					<span>HackerSupply</span>
					<span>Torre LEDs</span>
					<span>chaveNAH</span>
					<span>FenixQ&A</span>
				</p>

				<hr>
				<a id="info"></a>
				<div class="faqs">
					<h2>Informações</h2>
					<div class="faq">
						<h3>O que é o LX Reactor Winter Edition?</h3>

						<p>O LX Reactor Winter Edition, como o nome indica, é a edição de inverno do programa da <a href="http://hackerschool.tecnico.ulisboa.pt" target="_blank">HackerSchool</a> que junta o espírito maker, hacker e empreendedor, presente em alunos universitários de diversas áreas como engenharia e design. Através da criação de equipas multidisciplinares, terás a oportunidade de desenvolver projetos verdadeiramente inovadores.</p>
					</div>

					<div class="faq">
						<h3>Como irá ser a Winter Edition 2015?</h3>

						<p>À semelhança do ano passado, esta edição irá decorrer no Espaço Protótipo da Faculdade de Belas Artes e no Instituto Superior Técnico.</p>
						<p>Este ano terás uma semana para realizar o teu projeto que irá ser apresentado na sessão de encerramento com um pitch final avaliado por um painel de júris.</p>
						<p>Mas temos uma novidade para ti. A entrada será gratuita!</p>
					</div>

					<div class="faq">
						<h3>Quando vai ser o LX Reactor Winter Edition 2015?</h3>

						<p>O evento vai decorrer no Espaço Protótipo da Faculdade de Belas Artes nos dias 21, 22 e 28 de Fevereiro e no dia 1 de Março. Terás ainda uma HackNight de 25 para 26 de Fevereiro no Instituto Superior Técnico (espaço a confirmar).</p>
						<p>Precisas de mais tempo para trabalhar? Não te preocupes, durante os outros dias iremos também ter um espaço disponível para trabalhares, a partir das 18h, no Instituto Superior Técnico.</p>
					</div>

					<div class="faq">
						<h3>Quem é que pode participar?</h3>

						<p>No LX Reactor Winter Edition 2015 juntamos pessoas de várias áreas, com diversas áreas de conhecimento e interesses, que tenham gosto por desenvolver projectos inovadores em equipa.</p>
					</div>

					<div class="faq">
						<h3>Que projetos é que podem participar?</h3>

						<p>Sendo o LX Reactor um evento mais vocacionado para o empreendedorismo de base tecnológica, damos preferência a projetos nestas áreas, mas aceitamos também projetos noutras áreas desde que cumpram o regulamento, claro. O regulamento pode ser consultado <a href="./docs/RegulamentoProjectos.pdf">aqui</a>.</p>
					</div>

					<div class="faq">
						<h3>Como é que faço para participar?</h3>

						<p>Para participares terás de preencher o <a href="https://docs.google.com/forms/d/1N6uS8F-v9UKzmlM1Y8xn6-p3W62VCo_Q7pXe5VpYGQ4/viewform"</a>formulário de candidatura</a>. Podes candidatar-te individualmente ou já com uma equipa pré-definida. Podes também candidatar-te sem projeto que, através do formulário, iremos juntar-te a um.</p>
						<p>Após submeteres a candidatura, iremos analisá-la confirmando-te depois a inscrição.</p>
					</div>
				</div>
				
				<hr>
				<div>
				<a id="candidatura"></a>
				<h2>Candidatura</h2>
					<!--<p>A fase de candidaturas ainda não abriu mas marca já a data no teu calendário. Dia 12 de Janeiro de 2015 podes candidatar-te ao melhor desafio do Inverno!</p>-->
					<!--<p>Não percas a tua oportunidade de participar no LX Reactor Winter Edition 2015.
			Preenche o formulário de candidatura presente <a href="https://docs.google.com/forms/d/1N6uS8F-v9UKzmlM1Y8xn6-p3W62VCo_Q7pXe5VpYGQ4/viewform"</a>aqui</a>.</p>-->
				<p>As candidaturas encerraram dia 6 de Fevereiro de 2015. Caso não tenhas conseguido candidatar-te, mantém-te actualizado com a HackerSchool pois iremos ter mais eventos para ti!</p>
				</div>
			</div>
		</div>
		
		<div id="footer">
			<a id="contactos"></a>
			<div class="footer-logo">
				<span class="helper"></span>
				<a href="http://hackerschool.tecnico.ulisboa.pt">
					<img src="./img/HS_w500_white.png" />
				</a>
			</div>
			<div class="footer-logo">
				<span class="helper"></span>
				<a href="http://tecnico.ulisboa.pt" target="_blank">
					<img src="./img/IST_w502_white.png" />
				</a>
			</div>
			<div class="footer-logo">
				<span class="helper"></span>
				<a href="http://fba.ulisboa.pt" target="_blank">
					<img src="./img/FBAUL_w400_white.png" />
				</a>
			</div>
			<div class="footer-logo">
				<span class="helper"></span>
				<!--<a href="http://fba.ulisboa.pt" target="_blank">-->
					<img src="./img/AEFBAUL.png" />
				<!--</a>-->
			</div>
<!--
			<div class="footer-logo">
				<div class="fb-like" data-href="https://www.facebook.com/LXReactor" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="false" data-colorscheme="dark"></div>
			</div>
-->

			<div id="social">
				<a class="icon" href="https://facebook.com/LXReactor">
					<i class="fa fa-facebook"></i>
				</a>
				<a class="icon" href="https://twitter.com/hackerschoolist">
					<i class="fa fa-twitter"></i>
				</a>
				<a class="icon" href="https://vine.co/HackerSchool">
					<i class="fa fa-vine"></i>
				</a>
				<a class="icon" href="&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#097;&#099;&#107;&#101;&#114;&#115;&#099;&#104;&#111;&#111;&#108;&#064;&#116;&#101;&#099;&#110;&#105;&#099;&#111;&#046;&#117;&#108;&#105;&#115;&#098;&#111;&#097;&#046;&#112;&#116;">
					<i class="fa fa-envelope-o"></i>
				</a>
			</div>

			<div id="credit">
				© HackerSchool
				<!-- designed by Gonçalo Ribeiro and Manuel Palmeira -->
			</div>
		</div>
	</div>

</div>
</body>
</html>
