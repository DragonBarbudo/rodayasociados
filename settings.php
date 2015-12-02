<?php
	$u = "http://localhost/";
	#$u = "http://rodayasociados.com.mx";
	// TITULO
	$titulo = "Roday & Asociados";
	// META's
	$descripcion = "Somos una Firma de Abogados ejerciendo en distintas Ramas del Derecho, con sede en la Ciudad de México. Contamos con la experiencia profesional que su empresa requiere.";
	$keys= array("abogados","firma de abogados","ramas del derecho","abogados en méxico","profesionistas capacitados","representación","defender","ética profesional","derecho penal","derecho fiscal","derecho mercantil","derecho administrativo","controversias en materia de arrendamiento","derecho civil","arbitraje","derecho laboral","derecho de autor","propiedad industrial","derecho familia","litigio","negociaciones","alternativas de solución","trámites","registros","contratos","derecho hipotecario","propiedad intelectual","disputa de nombres de dominios","registro de marcas","patentes","derechos de autor","diseños industriales","secretos industriales","comerciales","nombres comerciales","derechos","créditos","cesión de derechos","valuación de inmuebles","registro público de la propiedad y comercio","derecho notarial","reforma 300","paseo de la reforma","abogados en méxico","attorneys at law","lawyers","law firm","areas of law","lawyers in Mexico","trained professionals","representation","defense","professional ethics","criminal law","tax law","commercial law","administrative law","lease disputes","civil law","arbitration","labor law","copyright","industrial property","family law","litigation","negotiations","alternative solutions","procedures","records","contracts","mortgage law","intellectual property","dispute domain names","trademarks","patents","copyrights","industrial designs","trade secrets", "industrial","commercial","trade names","rights","credits","transfer of rights","property valuation","public registry of property and commerce","notary law","lawyers in Mexico", "bufet de abogados", "buffete de abogados");

	$keys_ar = "";
	$keywords= "";
	$keys_ar = array_rand($keys, 20);
	foreach($keys_ar as $k => $i){
		if($k<19){
			$keywords.=$keys[$i];
			$keywords.=", ";
		} else {
			$keywords.=$keys[$i];
		}
	}

	//MySQL connection
	$servidor = "";
	$usuario = "";
	$password = "";
	$dbase = "";


	// MOBILE
	$mobile = 1;

	//Google maps load?
	$gmaps = 0;

	//Analytics id
	$analytics = 'UA-22567819-1';

/*	*	*	 DEBUG	*	*	 */

	/* TESTER */
	$tester = 0;
	$cols = 16;

	/* FORCE REALOAD */
	$b = 1;



	// LESS
	$less = array("style", "mobile");
	// CSS
	$css = array("style.css", "mobile.css");
	// JS
	$js = array("selectivizr.js", "excanvas.js", "jquery.js", "apprise.js", "script.js");


?>
