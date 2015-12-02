<section id="contacto">
		<h1><img src="imgs/roday.png" width="220" alt="Roday & Asociados"></h1>
		<div class="clear"></div>
		<? include('php/social.php'); ?>
		
		<div class="contenido">
			<div class="sectionimg"><img src="imgs/contacto.jpg" alt="inicio" width="460" height="140" /></div>
			<div class="clear"></div>
		<article class="maintext">
<?php if($_SESSION['language']=="español"){ ?>

			<h3>Dirección</h3>
			<p>Paseo de la Reforma 300 Piso 9. Col. Juárez. <br/>C.P. 06600. Ciudad de México</p>
			<hr/>
			<h3>Teléfono</h3>
			<p>01 (55) 35 47 - 68 28</p>
			<hr/>
			<h3>Correo electrónico</h3>
			<p><a href="mailto:contacto@rodayasociados.com.mx">contacto@rodayasociados.com.mx</a></p>
			<hr/>
			<h3>Formulario de contacto</h3>
			<form method="post" action="" id="contactform">
				<? 
				include('php/Inputs.php');
				new Inputs('Nombre','text', '', true); 
				new Inputs('Correo electrónico','email', '', true);
				new Inputs('Teléfono','text', '', true); 
				new Inputs('Compañía','text', '', false);
				new Inputs('Mensaje','textarea', '', true);
				new Inputs('','buttonsubmit','Enviar');
				?>
			</form>
<?php } else if($_SESSION['language']=="english"){ ?>
			<h3>Address</h3>
			<p>Paseo de la Reforma 300 Piso 9. Col. Juárez. <br/>C.P. 06600. Ciudad de México</p>
			<hr/>
			<h3>Phone number (México)</h3>
			<p>01 (55) 35 47 - 68 28</p>
			<hr/>
			<h3>E-mail</h3>
			<p><a href="mailto:contacto@rodayasociados.com.mx">contacto@rodayasociados.com.mx</a></p>
			<hr/>
			<h3>Contact form</h3>
			<form method="post" action="" id="contactform">
				<label for="nombre">Full Name</label>
				<input type="text" id="nombre" name="nombre" value="" required />
				<label for="correo_electronico">E-mail</label>
				<input type="email" id="correo_electronico" name="correo_electronico" value="" required />
				<label for="telefono">Phone</label>
				<input type="text" id="telefono" name="telefono" value="" required />
				<label for="compania">Company</label>
				<input type="text" id="compania" name="compania" value="" />
				<label for="mensaje">Message</label>
				<textarea id="mensaje" name="mensaje" required></textarea>
				<button name="enviar">Send</button>
			</form>



<?php } ?>
		<div class="clear"></div>
		</article>
		</div>
		<div class="clear"></div>
	</section>