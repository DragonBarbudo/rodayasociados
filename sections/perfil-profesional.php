<section id="perfil-profesional">
		<h1><img src="imgs/roday.png" width="220" alt="Roday & Asociados"></h1>
		<div class="clear"></div>
		<? include('php/social.php'); ?>
		
		<div class="contenido">
			<div class="sectionimg"><img src="imgs/perfil.jpg" alt="inicio" width="460" height="140" /></div>
		<div class="clear"></div>
		<article class="maintext">
<?php if($_SESSION['language']=="español"){ ?>

			<p>Nuestros abogados han asesorado y contendido a través de su historia laboral en diversas ramas del derecho en las que hoy son especialistas, teniendo así amplia experiencia en el Litigio, Negociación, Alternativas de Solución, Trámites y Registros, asi como elaboración de Contratos.</p>
<?php } else if($_SESSION['language']=="english"){ ?>
			<p>Our attorneys have advised and contended through his work history in various
branches of law in today are specialists and thus have extensive experience in
Litigation, Negotiation, Conciliation, Procedures and Contract preparation.
			</p>
<?php } ?>
		</article>
		<div class="clear"></div>
		<article class="doublemenus">
<?php if($_SESSION['language']=="español"){ ?>
			<ul>
				<li>Derecho Penal</li>
				<li>Derecho Fiscal</li>
				<li>Derecho Mercantil</li>
				<li>Derecho Administrativo</li>
				<li>Controversias en materia de Arrendamiento</li>
			</ul>
			<ul>
				<li>Derecho Civil</li>
				<li>Arbitraje</li>
				<li>Derecho Laboral</li>
				<li>Derecho de Autor</li>
				<li>Propiedad Industrial</li>
				<li>Derecho Familiar</li>
			</ul>
<?php } else if($_SESSION['language']=="english"){ ?>
			<ul>
				<li>Civil Law</li>
				<li>Criminal Law</li>
				<li>Tax Law</li>
				<li>Commercial Law</li>
				<li>Administrative Law</li>
			</ul>
			<ul>
				<li>ADR</li>
				<li>Arbitration</li>
				<li>Labor Law</li>
				<li>Copyrights</li>
				<li>Industrial Property</li>
				<li>Family Law</li>
			</ul>


<?php } ?>
		<div class="clear"></div>
		</article>
		</div>
		<div class="clear"></div>
	</section>