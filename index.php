<!DOCTYPE html>
<html>
<head>
	<title>Transportadora Krollow</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/uikit.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.3/sweetalert2.min.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.3/sweetalert2.all.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
	<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
		<nav class="uk-navbar-container" uk-navbar="dropbar:true; mode:click">
			<div class="uk-navbar-left">
				<a class="uk-navbar-item uk-logo" href="html" uk-scroll><img src="img/logo.png" alt=""></a>
				<ul class="uk-navbar-nav uk-visible@s">
					<li class="uk-active"><a href="html" uk-scroll>Home</a></li>
					<li><a href="#section_servicos" uk-scroll="offset: 60">Serviços</a></li>
					<li><a href="#section_sobrenos" uk-scroll="offset: 60">Sobre nós</a></li>
					<li><a href="#section_imagens" uk-scroll="offset: 60">Imagens</a></li>
					<li><a href="#section_unidades" uk-scroll="offset: 60">Nossas Unidades</a></li>
					<li><a href="#section_contato" uk-scroll="offset: 60">Contato</a></li>
				</ul>
			</div>
			<div class="uk-navbar-right uk-hidden@s">
				<ul class="uk-navbar-nav">
					<li>
						<a class="uk-navbar-toggle" href="#"><span uk-navbar-toggle-icon></span></a>
						<div class="uk-navbar-dropdown" id="menu_mobile">
							<ul class="uk-nav uk-navbar-dropdown-nav">
								<li class="uk-active"><a href="html" uk-scroll class="uk-text-right">Home</a></li>
								<li><a href="#section_servicos" uk-scroll="offset: 60" class="uk-text-right">Serviços</a></li>
								<li><a href="#section_sobrenos" uk-scroll="offset: 60" class="uk-text-right">Sobre nós</a></li>
								<li><a href="#section_imagens" uk-scroll="offset: 60" class="uk-text-right">Imagens</a></li>
								<li><a href="#section_unidades" uk-scroll="offset: 60" class="uk-text-right">Nossas Unidades</a></li>
								<li><a href="#section_contato" uk-scroll="offset: 60" class="uk-text-right">Contato</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="uk-height-large" id="section_home" style="overflow: hidden">
		<div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" id="title_home_parallax">
			<h1 uk-parallax="opacity: 1,1,0; y: 0,-100,-100; viewport: 0.5;">Transportadora Krolow</h1>
			<p uk-parallax="opacity: 1,1,0; y: 0,-100,-100; viewport: 0.5;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<video src="video/home_prev.mp4" autoplay loop muted playslinline style="position: relative; min-width: 100%;" uk-parallax="y: -100; easing: -1;"></video>
		</div>

		<div class="uk-section uk-section-medium uk-section-default uk-text-center" id="quote_section">
			<h2 class="uk-text-lead">"Lorem ipsum dolor, sit amet..."</h2>
		</div>

		<div class="uk-section uk-section-default section_site uk-background-cover" uk-parallax="bgy: -300; easing: -1;" style="background-image: url('img/slideshow/6.jpg');" id="section_servicos">
			<div class="uk-container">
				<h1>Serviços</h1>
				<div class="uk-column-1-4@m uk-column-1-4@l">
					<div class="uk-card uk-card-default uk-card-body">
						<h3 class="uk-card-title">Florestal</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="uk-card uk-card-default uk-card-body uk-margin-top">
						<h3 class="uk-card-title">Graneleiro</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="uk-card uk-card-default uk-card-body uk-margin-top">
						<h3 class="uk-card-title">Caçambas</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="uk-card uk-card-default uk-card-body uk-margin-top">
						<h3 class="uk-card-title">Líquidos</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-section uk-section-default section_site" id="section_sobrenos">
			<div class="uk-container uk-text-justify">
				<h1>Sobre Nós</h1>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>

		<div class="uk-container"><hr></div>

		<div class="uk-section uk-section-default section_site" id="section_imagens">
			<div class="uk-container">
				<h1>Imagens</h1>
				<div class="uk-position-relative" uk-slideshow="animation: fade" id="slideshow_imagens">
					<ul class="uk-slideshow-items">
						<li><img src="img/slideshow/1.jpeg" alt="" uk-cover></li>
						<li><img src="img/slideshow/2.jpeg" alt="" uk-cover></li>
						<li><img src="img/slideshow/3.jpeg" alt="" uk-cover></li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
					<p id="btn_thumbs" class="uk-visible@m"><span>Galeria</span> <span uk-icon="icon: thumbnails; ratio: 1.5"></span></p>
					<div class="uk-position-bottom-center uk-position-small uk-visible@m" id="thumbs_slideshow">
						<p id="close_thumbs"><span>Fechar</span> <span uk-icon="icon: close; ratio: 1"></span></p>
						<ul class="uk-thumbnav">
							<li uk-slideshow-item="0"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="1"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="2"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="3"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="4"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="5"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="6"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="7"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="8"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="9"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="10"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="11"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="12"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="13"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="14"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="15"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="16"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="17"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="18"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="19"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="20"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="21"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="22"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="23"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="24"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="25"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="26"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="27"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="28"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="29"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="30"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="31"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="32"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="33"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="34"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="35"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="36"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="37"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="38"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="39"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="40"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="41"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="42"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="43"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="44"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="45"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="46"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="47"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="48"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="49"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="50"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="51"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="52"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="53"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="54"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="55"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="56"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="57"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="58"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="59"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="60"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="61"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="62"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="63"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="64"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="65"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="66"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="67"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="68"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="69"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="70"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="71"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="72"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="73"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="74"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="75"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="76"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="77"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="78"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="79"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="80"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="81"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="82"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="83"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="84"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="84"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="86"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="87"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="88"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="89"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="90"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="91"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="92"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="93"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="94"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="95"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="96"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="97"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="98"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="99"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="100"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="101"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="102"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="103"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="104"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="105"><a href="#"><img src="img/slideshow/1.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="106"><a href="#"><img src="img/slideshow/2.jpeg" width="100" alt=""></a></li>
							<li uk-slideshow-item="107"><a href="#"><img src="img/slideshow/3.jpeg" width="100" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-container"><hr></div>

		<div class="uk-section uk-section-default section_site" id="section_contato">
			<div class="uk-container">
				<h1>Contato</h1>
				<div class="uk-grid-small" uk-grid>
					<div class="uk-width-1-2@s uk-first-column uk-flex uk-flex-center uk-flex-middle">
						<div>
							<p><span uk-icon="icon: phone; ratio: 1.5"></span> (00) 0000-0000 / (00) 00000-0000</p>
							<p><span uk-icon="icon: mail; ratio: 1.5"></span> contato@transportadorakrolow.com.br</p>
							<p><span uk-icon="icon: location; ratio: 1.5"></span> Rua Exemplo, número 0000, Exemplo, Exemplo/EX</p>
						</div>
					</div>
					<form method="post" action="javascript:void(0)" id="form_contato" class="uk-grid-small uk-width-1-2@s" uk-grid>
						<legend class="uk-legend">Envie-nos uma mensagem</legend>

						<div class="uk-width-1-1@m">
							<input class="uk-input" type="text" name="nome" placeholder="Seu nome">
						</div>
						<div class="uk-width-1-2@m">
							<input class="uk-input" type="text" name="email" placeholder="Seu e-mail">
						</div>
						<div class="uk-width-1-2@m">
							<input class="uk-input" type="text" name="telefone" placeholder="Seu telefone">
						</div>
						<div class="uk-width-1-1@m">
							<textarea class="uk-textarea" rows="5" placeholder="Sua mensagem"></textarea>
						</div>
						<div class="uk-width-1-2@m">
							<button class="uk-button uk-button-default uk-width-1-1" type="submit">Enviar</button>
						</div>
						<div class="uk-width-1-2@m">
							<button class="uk-button uk-button-default uk-width-1-1" type="reset">Limpar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- <footer class="uk-section uk-section-muted" id="rodape">
	</footer> -->
</body>
</html>