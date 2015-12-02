<?
	session_start();
	include('config.php');

	if($_POST['lang']=='en'){
		$_SESSION['language'] = "english";
	} else if($_POST['lang']=='es') {
		$_SESSION['language'] = "español";
	}
	if($_SESSION['language']==""){
		$_SESSION['language'] = "español";
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>

<? include('php/head.php'); ?>
<meta name="google-site-verification" content="YgAp2AE2K4s0DA90M1meFnPhV2DObbcd_jfoWimZ0CU" />
<? if($s=='inicio'){ ?>
	<style type="text/css">header{ margin-top: -76px; /* HIDDEN TOP LOGO */ }</style>
<? } ?>

</head>

<body>



<!--Header-->
<header>
<div id="header">
	<div id="headerlogo"></div><div class="clear"></div>
	<?php
	/*
	if($_SESSION['language']=="español"){
		echo "<nav>",$navigation,"</nav>";
	} else if($_SESSION['language']=="english"){ ?>
	<nav><ul><li id="_inicio"><a href="inicio" class="active">HOME</a></li><li id="_perfil-profesional"><a href="perfil-profesional" class="">PROFESSIONAL PROFILE</a></li><li id="_ramas-de-derecho"><a href="ramas-de-derecho" class="">BRANCHES OF LAW</a></li><li id="_colaboradores"><a href="colaboradores" class="">TEAM</a></li><li id="_contacto"><a href="contacto" class="">CONTACT US</a></li></ul></nav>
	<?php }*/ ?>

	<?php echo "<nav>",$navigation,"</nav>";
		if($_SESSION['language']=="english"){
	?>
	<script type="text/javascript">$(document).ready(function(){
		$('#_inicio a').html('HOME');
		$('#_perfil-profesional a').html('PROFESSIONAL PROFILE');
		$('#_ramas-de-derecho a').html('BRANCHES OF LAW');
		$('#_colaboradores a').html('TEAM');
		$('#_contacto a').html('CONTACT US');
	});</script>
	<?php
		}
	?>
	<div class="clear"></div>
</div>
</header>

<section id="fullsite">
<!-- fullsite -->
	<? include('sections/'.$s.'.php'); ?>
<!-- end fullsite-->
</section>

<div class="clear"></div>
<footer>
	<div id="footer">
		<p>RODAY & ASOCIADOS S. DE R.L. DE C.V.</p>
		<p><a target="_blank" href="avisodeprivacidad.pdf">Aviso de privacidad</a></p>
		<p>Paseo de la Reforma 300 Piso 9. Col. Juárez. C.P. 06600. Ciudad de México. Tel. 35 47 - 68 28.</p>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</footer>







<!-- analysis -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22567819-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://dragonbarbudo.com/clientes/" : "http://dragonbarbudo.com/clientes/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 3);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://dragonbarbudo.com/clientes/piwik.php?idsite=3" style="border:0" alt="" /></p></noscript>


</body>
</html>
