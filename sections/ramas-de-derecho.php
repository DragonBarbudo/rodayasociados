<section id="ramas-de-derecho">
		<h1><img src="imgs/roday.png" width="220" alt="Roday & Asociados"></h1>
		<div class="clear"></div>
		<? include('php/social.php'); ?>
		
		<div class="contenido">
			<div class="sectionimg"><img src="imgs/ramas.jpg" alt="inicio" width="460" height="140" /></div>
		<div class="clear"></div>
		<article class="maintext">
<?php if($_SESSION['language']=="español"){ ?>

			<h3>Derecho Hipotecario</h3>
			<p>
Somos especialistas en el Litigio, Negociación y Manejo de Cartera Vencida Judicial de Inmuebles mediante la interposición de Juicios Ordinarios y Especiales, tanto Mercantiles como Hipotecarios, así como el conocimiento de las actividades que se derivan como son la elaboración y estudio de Contratos de Apertura de Crédito, Cesión de Créditos, Cesión de Derechos Litigiosos, Valuación de Inmuebles, Trámites ante el Registro Público de la Propiedad y Comercio, entre otras.</p>

			<h3>Derecho Mercantil</h3>
			<p>Nuestros abogados podrán representarlo, defenderlo y asesorarlo frente a procedimientos de tipo comercial, en juicios, arbitrajes, así como para la elaboración y negociación de contratos.</p>

			<h3>Propiedad Intelectual</h3>
			<p>Registro y litigio de obras artisticas y sus derechos derivados.
Literaria, Musical, Dramática, Dibujo, Escultórica, Caricatura e historieta, Arquitectónica, Cinematográfica, Fotográfica, Programas de cómputo, Diseño gráfico, Reserva de Derechos y Otras.</p>

			<p>Registro y litigio de invenciones aplicadas al comercio.
Marcas, Modelos de Utilidad, Diseños Industriales, Secretos Industriales, Avisos Comerciales, Nombres Comerciales.</p>

			<h3>Asesoría en Disputa de Nombres de Dominios</h3>
			<p>Acciones y defensas para recuperar, cancelar, transferir o conservar un nombre de dominio de internet.</p>
<?php } else if($_SESSION['language']=="english"){ ?>
			<h3>Mortgage Law</h3>
			<p>We specialize in Litigation, Negotiation and Management of Real Estate Judicial
Performing Loans by filing regular and special trials, both as a Commercial Mortgage, as well as knowledge of the activities that arise such as the
development and study of Open Contracts credit Assignment, Assignment of Rights litigation, Property Valuation, Proceedings before the Public Registry of Property and Commerce, among others.</p>
			
			<h3>Commercial Law</h3>
			<p>Our attorneys can represent, support and advise against commercial procedures, trials, arbitrations, as well as drafting and negotiating contracts.</p>
			
			<h3>Intellectual property</h3>
			<p>Registration and issue of artistic works and their derived rights. Literary, Musical, Drama, Drawing, Sculpture, Caricature and Cartoon, Architectural, Film, Photo, software, graphic design, and Other Reservation of Rights.</p>

			<h3>Registration and issue of trade-implemented inventions.</h3>
			<p>Marks, Utility Models, Industrial Designs, Trade Secrets, Signs, trade names.</p>
			
			<h3>Advice on Domain Name Dispute</h3>
			<p>Actions and defenses to recover, cancel, transfer or retain an internet domain name.</p>
			
<?php } ?>
		<div class="clear"></div>
		</article>
		</div>
		<div class="clear"></div>
	</section>