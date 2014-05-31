@extends('layout.master')

@section('content')
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/">César Domingos</a>
				
				<div class="nav-collapse collapse">
					<ul class="nav option-set" data-option-key="filter">
						<li>
							<a href="#show-all" data-option-value="*" class="selected">
								<i class="icon-home"></i> <span class="name">Home</span>
							</a>
						</li>
						<li>
							<a href="#sobre" data-option-value=".about">
								<i class="icon-user"></i> <span class="name">Sobre</span>
							</a>
						</li>
						<li>
							<a href="#portfolio" data-option-value=".portfolio">
								<i class="icon-tablet"></i> <span class="name">Portfólio</span>
							</a>
						</li>
						<li>
							<a href="#contato" data-option-value=".contact">
								<i class="icon-envelope-alt"></i> <span class="name">Contato</span>
							</a>
						</li>
						<li class="show-title"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Ajax Content Load -->
	<div class="container container-top">
		<div id="container-ajax" class="element">
			<a href="#" class="close-ajax"><span class="x-button">&#10006;</span></a>
			<div class="ajax-content"></div>
		</div>
	</div>
	
	<input type="hidden" class="last-scroll" value="0">
	
	<!-- Main elements -->	
	<div id="container-isotope" class="super-list variable-sizes clearfix">
	 
		<!-- Nome -->
		<div class="element primary-bg width4 text-center">
			<input type="hidden" class="order" value="0">
			{{ HTML::image('/img/ouroboros.png', 'Ouroboros', array('style' => 'width: 15%; margin: -10px 0 -20px 0;', 'class' => 'hidden-phone hidden-tablet')) }}
			<h1 class="main-name">César Oliveira Domingos</h1>
			<hr class="thick" />
			<h2>Live and Learn</h2>
		</div>
		
		<!-- Sobre --><!-- 
		<div class="element about width2">
			<input type="hidden" class="order" value="1">
			<small>Prazer em conhecê-lo!</small>
			<h2 class="title">Sobre mim</h2>
			<p>Olá, meu nome é <strong>César Oliveira Domingos</strong>, sou <strong>Programador PHP Pleno</strong> com muita vontade de criar, inovar e extrair o máximo do meu conhecimento.</p>
		</div> -->
		
		<!-- Habilidades -->
		<div class="element about width2 height2">
			<input type="hidden" class="order" value="5">
			<small>O que posso fazer por você?</small>
			<h2 class="title">Habilidades</h2>

			<strong class="dark">HTML 5 - 100%</strong>
			<div class="progress"><div class="bar" style="width: 100%"></div></div>

			<strong class="dark">CSS 3 - 95%</strong>
			<div class="progress"><div class="bar" style="width: 95%"></div></div>

			<strong class="dark">JQuery - 80%</strong>
			<div class="progress"><div class="bar" style="width: 80%"></div></div>

			<strong class="dark">PHP - 95%</strong>
			<div class="progress"><div class="bar" style="width: 95%"></div></div>

			<strong class="dark">SQL - 80%</strong>
			<div class="progress"><div class="bar" style="width: 80%"></div></div>

			<strong class="dark">Laravel - 90%</strong>
			<div class="progress"><div class="bar" style="width: 90%"></div></div>

			<strong class="dark">Magento - 75%</strong>
			<div class="progress"><div class="bar" style="width: 75%"></div></div>
		</div>

		<!-- Experiencias -->
		<div class="element about height3 width2">
			<input type="hidden" class="order" value="9">
			<small>Veja onde eu trabalhei.</small>
			<h2 class="title">Experiencia Profissional</h2>

			<table class="table">
				<tr>
					<th class="no-wrap">2013 - Atualmente</th>
					<td>
						<h4 class="primary-color">
							Analista Programador<br/>
							<small>Grouptools</small>
						</h4>
						<p>Na Grouptools aprendi diversas tecnicas de programação e tive a oportunidade de desenvolver e participar em quase todos os projetos desenvolvido nessa empresa de startup</p>
						<p>Desenvolvi desde websites em laravel, trabalhos com cURL, plataformas externas, E-mail Marketing, plataforma de Afiliados e muito mais...</p>
					</td>
				</tr>

				<tr>
					<th class="no-wrap">2011 - 2013</th>
					<td>
						<h4 class="primary-color">
							Web Designer | Designer Gráfico | Programador<br/>
							<small>Visão Criativa</small>
						</h4>
						<p>Na Visão Criativa tive mais do que um chefe, fiz uma amizade com o dono da empresa onde fui o braço direito dele, para a empresa funcionar era necessario a minha presença.</p>
						<p>Desenvolvi diversos websites para varios clientes alem de criar também, e-mail marketing, folder, cartão de visita e muito mais...</p>
					</td>
				</tr>

				<tr>
					<th class="no-wrap">2010 - 2011</th>
					<td>
						<h4 class="primary-color">
							Web Designer | Designer Gráfico<br/>
							<small>Spring Shoe</small>
						</h4>
						<p>Na Spring Shoe fiz grandes amizades, aprendi coisa interessante além do que está no computador.</p>
						<p>Desenvolvi os sites do grupo alem de criar diversos modelos de tênis, custo de material e estampas para ser usado em camisa, bonés e tênis.</p>
					</td>
				</tr>
			</table>
		</div>  
		
		<!-- Educação -->
		<div class="element about height2 width2">
			<input type="hidden" class="order" value="3">
			<small>Olha só onde estudei.</small>
			<h2 class="title">Educação</h2>
			<table class="table">
				<tr>
					<th class="no-wrap">2012</th>
					<td>
						<h4 class="primary-color">
							8Ps do Marketing Digital<br/>
							<small>Ministrado por Conrado Adolpho</small>
						</h4>
					</td>
				</tr>
				<tr>
					<th class="no-wrap">2011</th>
					<td>
						<h4 class="primary-color">
							PHP Avançado Modulos I e II<br/>
							<small>Impacta</small>
						</h4>
					</td>
				</tr>
				<tr>
					<th class="no-wrap">2010</th>
					<td>
						<h4 class="primary-color">
							Técnico em Produção Multimídia (Web Design)<br/>
							<small>Universidade Braz Cubas</small>
						</h4>
					</td>
				</tr>
				<tr>
					<th class="no-wrap">2009</th>
					<td>
						<h4 class="primary-color">
							Inglês Básico<br/>
							<small>Microcamp</small>
						</h4>
					</td>
				</tr>
				<tr>
					<th class="no-wrap">2009</th>
					<td>
						<h4 class="primary-color">
							Web Designer Developer<br/>
							<small>Microcamp</small>
						</h4>
						<!-- <p>Windows, Internet, HTML, CSS, CorelDraw, Photoshop, Fireworks, Desenvolvimento de Site, Lógica de Programação, JavaScript, PHP, Mysql, ASP e Flash.</p> -->
					</td>
				</tr>
				<tr>
					<th class="no-wrap">2007</th>
					<td>
						<h4 class="primary-color">
							Informática Técnico<br/>
							<small>Cedaspy</small>
						</h4>
						<!-- <p>Windows, Word, Excel, Internet, CorelDraw, PowerPoint, Desenvolvimento de Site e Montagem e Manutenção de Computador.</p> -->
					</td>
				</tr>
			</table>
		</div>  
		
		<!-- Portfolio Items -->
		
		<a href="/portfolio/ioliveira" class="element element-portfolio portfolio width2 ajax">
			<input type="hidden" class="order" value="4">
			<img src="img/portfolio/ioliveira_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>iOliveira | 2014</span>
		</a>
		
		<a href="/portfolio/none" class="element element-portfolio portfolio height2 ajax">
			<input type="hidden" class="order" value="4">
			<img src="img/portfolio/pricefinder_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>PriceFinder | 2014</span>
		</a>
		
		<a href="/portfolio/none" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="4">
			<img src="img/portfolio/pricesocial_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>PriceSocial | 2014</span>
		</a>

		<a href="/portfolio/advancecloud" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="8">
			<img src="img/portfolio/advancecloud_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Advance Cloud | 2013</span>
		</a>

		<!-- <a href="project_image_6.html" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="2">
			<img src="img/portfolio/yeti_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Planet Connection | 2013</span>
		</a> -->

		<a href="/portfolio/none" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="8">
			<img src="img/portfolio/smartwire_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>SmartWire | 2013</span>
		</a>

		<!-- <a href="project_image_6.html" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="2">
			<img src="img/portfolio/yeti_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>MetLife | 2013</span>
		</a> -->
		
		<a href="/portfolio/grouptools" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="11">
			<img src="img/portfolio/grouptools_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Grouptools | 2013</span>
		</a>
		
		<a href="/portfolio/callix" class="element element-portfolio portfolio height2 ajax">
			<input type="hidden" class="order" value="11">
			<img src="img/portfolio/callix_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Callix Brasil | 2013</span>
		</a>
		
		<a href="/portfolio/none" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="17">
			<img src="img/portfolio/animalcenter_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Animal Center | 2013</span>
		</a>
		
		<a href="/portfolio/none" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="13">
			<img src="img/portfolio/getaway_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Getaway | 2013</span>
		</a>

		<a href="/portfolio/none" class="element element-portfolio portfolio width2 ajax">
			<input type="hidden" class="order" value="18">
			<img src="img/portfolio/visaocriativa2_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Visão Criativa 2 | 2012</span>
		</a>

		<a href="/portfolio/none" class="element element-portfolio portfolio width2 ajax">
			<input type="hidden" class="order" value="20">
			<img src="img/portfolio/visaocriativa_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Visão Criativa | 2011</span>
		</a>
		






		<!-- <a href="project_image_6.html" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="7">
			<img src="img/portfolio/yeti_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>MetLife Hotsite</span>
		</a>
		
		<a href="project_image_6.html" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="10">
			<img src="img/portfolio/yeti_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Smart Wire</span>
		</a>

		<a href="project_image_2.html" class="element element-portfolio portfolio width2 ajax">
			<input type="hidden" class="order" value="15">
			<img src="img/portfolio/afro_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Metal Coat</span>
		</a>
		
		 <a href="project_image_3.html" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="16">
			<img src="img/portfolio/dodo_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Soluções Certas</span>
		</a>
		
		<a href="project_image_4.html" class="element element-portfolio portfolio width2 height2 ajax">
			<input type="hidden" class="order" value="18">
			<img src="img/portfolio/sketch_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Forum de Varejo</span>
		</a>
		
		<a href="project_image_5.html" class="element element-portfolio portfolio ajax">
			<input type="hidden" class="order" value="19">
			<img src="img/portfolio/village_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Mad Bull Shoes</span>
		</a> -->
		
		<a href="portfolio/ralcontrol" class="element element-portfolio portfolio width2 ajax">
			<input type="hidden" class="order" value="21">
			<img src="img/portfolio/ralcontrol_thumb.jpg" class="portfolio-image" alt="portfolio image"/>
			<span class="portfolio-title"><i class="icon-tag"></i>Ralcontrol | 2009</span>
		</a>
		
		<!-- Contato -->
		<div class="element contact height2 width2">
			<input type="hidden" class="order" value="19">
			<small>Fale comigo.</small>
			<h2 class="title">Contato</h2>
			<table class="table">
				<tr>
					<th>Nome:</th>
					<td>César Domingos</td>
				</tr>
				<tr>
					<th>Nascimento:</th>
					<td>28/03/1989</td>
				</tr>
				<tr>
					<th>Celular:</th>
					<td>(11) 94255-2689</td>
				</tr>
				<tr>
					<th>E-mail:</th>
					<td><a href="mailto:cesar_web@live.com?subject=Olá César! :)&body=Olá, ">cesar_web@live.com</a></td>
				</tr>
				<tr>
					<th>Endereço:</th>
					<td>Guarulhos - SP</td>
				</tr>
			</table>
			<hr/>
			<p>Sinta-se livre para entrar em contato comigo quando quiser!</p>		
		</div>  
		
		<!-- Maps -->
		<!-- <div class="element contact map width3">
			<input type="hidden" class="order" value="15">
			<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Toronto,+ON&amp;aq=0&amp;oq=toro&amp;sll=49.303974,-84.738438&amp;sspn=15.573249,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Toronto,+Toronto+Division,+Ontario&amp;ll=43.653226,-79.383184&amp;spn=0.033721,0.084543&amp;t=m&amp;z=14&amp;output=embed"></iframe>
		</div> -->

		<!-- E-mail -->
		<!-- <div class="element contact width2 height2">
			<input type="hidden" class="order" value="16">
			<small>
			Get in touch.
			</small>
			<h2 class="title">Email Me
			</h2>
			<div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, I will get back to you soon.</div>
			<div id="error" class="alert alert-error" style="display:none"></div>
				
			<form class="contact_form" id="contact_form">

				<label class="control-label" for="fname">Name*</label>
				<input type="text" id="fname" placeholder="Name">
				<label class="control-label" for="email">Email*</label>
				<input type="text" id="email" placeholder="Email">

				<label class="control-label" for="message">Message*</label>
				<textarea id="message"></textarea>
				<br/>
				<button type="submit" id="submit_contact_info" class="btn btn-primary">Send Email <i class="icon-envelope-alt"></i></button>

			</form>
		</div> -->
		
		<!-- Office -->
		<!-- <div class="element contact height2">
			<input type="hidden" class="order" value="17">
			<small>
			Work Address
			</small>
			<h2 class="title">Office
			</h2>
			<p>
			<strong>Office Building Name</strong><br>
			1st Line of Address<br/>
			2nd Line of Address
			</p>
			<br/>
			<small>Follow me</small>
			<h2 class="title">Networks
			</h2>
			<p>
			<a href="#">
			<i class="foundicon-twitter pad-right"></i> Follow me on Twitter
			</a><br/>
			<a href="#">
			<i class="foundicon-facebook pad-right"></i> View my Facebook page
			</a><br/>
			<a href="#">
			<i class="foundicon-linkedin pad-right"></i> Professional LinkedIn profile
			</a><br/>
			<a href="#">
			<i class="foundicon-dribbble pad-right"></i> Browse my Dribbble
			</a><br/>
			<a href="#">
			<i class="foundicon-rss pad-right"></i> Subscribe to my RSS feed
			</a><br/>
			<a href="#">
			<i class="foundicon-github pad-right"></i> See my work on Github
			</a><br/>
			</p>
		</div> -->

		<!-- Twitter -->
		<!-- <div class="element contact">
			<input type="hidden" class="order" value="19">
			<small>
			Latest from my Twitter.
			</small>
			<h2 class="title">Twitter
			</h2>
			<blockquote class="twitter-content">
			</blockquote>
			<a href="http://www.twitter.com/envato" class="btn btn-primary">@twitter_account <i class="icon-twitter"></i></a>
		</div> -->

		<!-- Live and Learn -->
		<!-- <div class="element">
			<input type="hidden" class="order" value="2">
			<p class="big-text dark text-no-transform text-cursive">
				<span class="primary-color ">Live</span><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and<br/>
				&nbsp;&nbsp;<span class="primary-color ">Learn</span>
			</p>
			<small>(Viver e Aprender)</small>
		</div> -->
		
		<!-- Commentarios -->
		<!-- <div class="element">
			<input type="hidden" class="order" value="20">
			<blockquote>John Doe is a great guy to work with. Constantly reliable and efficient. A++.
				<small>Bob Smith</small>
			</blockquote>
			<blockquote>Delivered results immediately. Impeccable attention to detail.
				<small>Jane Smith</small>
			</blockquote>
		</div> -->
		
	</div>
@stop