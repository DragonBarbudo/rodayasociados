<section id="inicio">
		<h1><img src="imgs/roday.png" width="220" alt="Roday & Asociados"></h1>
		<div class="clear"></div>
		
		<? include('php/social.php'); ?>
		
		<div class="contenido">
			<div class="sectionimg"><img src="imgs/inicio.jpg" alt="inicio" width="460" height="140" /></div>
			
			<div class="clear"></div>
			<article class="maintext">
			
<?php if($_SESSION['language']=="español"){ ?>
				<p>Somos una Firma de Abogados autorizados legalmente para el ejercicio de distintas Ramas del Derecho, con sede en la Ciudad de México y con la suficiente experiencia profesional para brindarle los servicios jurídicos que usted y su empresa requieren en las áreas que nuestro despacho ofrece.</p>
				
				<p>Nuestros servicios son brindados a través de profesionistas capacitados a nivel Posgrados y Especialización, de acuerdo a la Rama del Derecho que en su ámbito profesional ofrece ésta firma.	
				<p>
				
				<p>Nuestra misión es Representar y Defender a nuestros clientes con la mayor calidad bajo políticas de:	
				</p>
				<blockquote>
					Comunicación inmediata, Confidencialidad y Ética profesional.
				</blockquote>
<?php } else if($_SESSION['language']=="english"){ ?>
			
				<p>We are a legally authorized Law Firm based in Mexico City, to practice in different
areas of law, and with enough experience to provide legal services that require you
and your company in the areas that our firm offers.</p>
				<p>Our services are provided by trained postgraduate and specialization
professionals, according to the branch of law in their professional field that our firm
offers.</p>
				<p>Our mission is to represent and defend our clients with the highest quality and
under policies of:</p>
				<blockquote>
					 Instant communication, Confidentiality and Professional ethics.
				</blockquote>
<?php } ?>
			<div class="clear"></div>
			</article>
		</div>
		<div class="clear"></div>
</section>

