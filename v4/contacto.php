<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta name="author" content="Grupo Creación |  Luka Cvrk" />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>>Grupo Creaci&oacute;n | Dise&ntilde;o de p&aacute;ginas web</title>
 	<meta name="Keywords" 
		content="creacion,creaci&oacute; p&aacute;ginas,p&aacute;,web,diseñoi,dise&ntilde;o,paginas" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<body>
	<div class="content">
		<div class="header_top"></div>
		<div class="header">
			<div class="sf_right">
				<div id="nav">
    				<ul>
						<li><a href="index.php">Inicio</a></li>
      					<li><a href="empresa.php">Empresa</a></li>
      					<li><a href="productos.php">Productos</a></li>
      					<li id="current"><a href="contacto.php">Contacto</a></li>
      					<li><a href="soporte.php">Soporte</a></li>
					</ul>
				</div>
				<div class="sf_search">
					<form method="get" action="http://www.google.com/search">
					<fieldset>
						<input type="hidden" name="sitesearch" value="creacionpaginasweb.com" />
						<p>
							<b>Buscar:</b>
							<input type="text" name="q" class="search" /> 
							<input type="submit" value="Go" class="submit" /> &nbsp; Dise&ntilde;o de P&aacute;ginas web
						</p>
					</fieldset>
					</form>
				</div>
			</div>
			<div class="sf_left">
				<h1><a href="#">Grupo Creaci&oacute;n</a></h1>
			</div>
		</div>
		<div class="header_bottom"></div>
		<div class="subheader">
			<p>
			
			</p>
		</div>
		<div class="header_top"></div>
		<div class="left">
			<div class="left_side">
				<div class="box_top">
					<h2>Creaci&oacute;n web:</h2>
				</div>	
				<div class="box">			
					<p> 
&iquest;A&uacute;n no tiene p&aacute;gina web? &iquest;Su web
est&aacute; obsoleta? &iquest;Desea mejorar su posici&oacute;n en los
buscadores? El <b>Grupo Creaci&oacute;n</b> pone a su disposici&oacute;n un
amplio abanico de productos para satisfacer sus necesidades. Disponemos
de soluciones integrales: dise&ntilde;o web, alojamiento,
promoci&oacute;n, etc. Si no encuentra un producto que se ajuste a sus
necesidades, cons&uacute;ltenos y crearemos un proyecto a su medida.</p>
				</div>
				<div class="box_bottom"></div>
			</div>
			<div class="right_side">
				<div class="article">
					<h2>Formulario de contacto</h2>
					<!-- CODIGO PHP -->
					           
				<?php // COPYRIGHT/LIABILITY NOTICE
				// Copyright © 2002 Kali (http://www.xentrik.net)
				// Last modified 04/05/2004
				// Kali's Contact Form may be used and modified free of charge as long as this
				// copyright notice and the comments above remain intact. By using this code
				// you agree to indemnify Kali from any liability that might arise from its use.
				// Selling the code for this program without prior written consent is not permitted.
				// Permission must be obtained before redistributing this software. In all cases the
				// copyright and header information must remain intact.
				// MODIFY THE FOLLOWING SECTION
				// your name
				$recipientname = "Grupo Creacion";
				// your email
				$recipientemail = "info@creacionpaginasweb.com";
				// subject of the email sent to you
				$subject = "Formulario enviado [$recipientname]";
				// send an autoresponse to the user?
				$autoresponse = "yes";
				// subject of autoresponse
				$autosubject = "Solicitud recibida";
				// autoresponse message
				$automessage = "Hemos recibido su solicitud. En breve nos pondremos en contacto con usted.\nMuchas Gracias por su confianza. \n\n Grupo Creación \n www.creacionpaginasweb.com";
				// thankyou displayed after the user clicks "submit"
				$thanks = "<p>La solicitud ha sido enviada.<br>Nos pondremos en contacto con usted con la mayor brevedad.<br></p>";
				// END OF NECESSARY MODIFICATIONS
				?>


				<?php 
				if($_POST['submitform'])
				{
					      $Name = $HTTP_POST_VARS['Name'];
					      $Email = $HTTP_POST_VARS['Email'];
					      $Comments = $HTTP_POST_VARS['Comments'];
					      // check required fields
					      $dcheck = explode(",",$HTTP_POST_VARS['require']);
					      while(list($check) = each($dcheck)) {
					      if(!$$dcheck[$check]) 
					      {
					                            $error .= "No introdujo $dcheck[$check]<br>";
					      }
				}
				// check email address
				if ((!ereg(".+\@.+\..+", $Email)) || (!ereg("^[a-zA-Z0-9_@.-]+$", $Email))){
				$error .= "Dirección de email no v&aacute;lida<br>";}
				// display errors
				if($error) {
				?>
				<p>
				<b>Error</b>
				<p>

				<?php echo $error; ?><br>
					  <a href="#" onclick="history.go(-1)">probar de nuevo</a>
					  </p>
				<?php }
				else
				{
				$browser = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
				$ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
				// format message
				$message = "Respuesta al formulario de $recipientname:
				Nombre: $Name
				Email: $Email
				Commentarios: $Comments
				-----------------------------
				Browser: $browser
				User IP: $ip";
				// send mail and print success message
				mail($recipientemail,"$subject","$message","From: $Name <$Email>");
				if($autoresponse == "yes") {
				$autosubject = stripslashes($autosubject);
				$automessage = stripslashes($automessage);
				mail($Email,"$autosubject","$automessage","From: $recipientname <$recipientemail>");
				}
				echo "$thanks";
				include 'includes/seguimiento.inc';
				echo "...";
				}
				}
				else {
				?>
				<form action="<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?>" method="post">
				<fieldset>
						<input name="require" value="Name,Email,Comments" type="hidden"/>
						<p>
						Rellene el formulario indicando una breve descripci&oacute;n de sus necesidades.
						En un plazo aproximado de 24h recibir&aacute; un presupuesto para su
						proyecto.
						</p>
						<p>
						Si lo prefiere, env&iacute;enos un FAX al  940 46 74 42.
						</p>
					    <table>
						<tr>
						  <td align="right" valign="top">Nombre:</td>
						  <td valign="top"><input name="Name" size="25"/></td>
						</tr>
						<tr>
						  <td align="right" valign="top">E-mail:</td>
						  <td valign="top"><input name="Email" size="25"/></td>
						</tr>
						<tr>
						  <td align="right" valign="top">Solicitud:</td>
						  <td valign="top"><textarea name="Comments" rows="10" cols="35"></textarea></td>
						</tr>
						<tr>
						  <td colspan="2" align="center"><input value="Enviar" name="submitform" type="submit"/>
						  <input value="Borrar" name="reset" type="reset"/></td>
						</tr>
						</table>
				</fieldset>
				</form>                  

				<?php } ?>
			
			<!-- FIN CODIGO PHP -->
					
					
				</div>
			</div>
		</div>	
		<div class="right">
			<div class="box_top">
				<h2>El precio:</h2>
			</div>	
			<div class="box">			
				<p>
				Nuestra pol&iacute;tica de bajo coste asegura los precios m&aacute;s ajustados del mercado. Sin renunciar a la calidad ofrecemos las mejores ofertas. Adem&aacute;s, nuestros precios son cerrados, no se encontrar&aacute; con "sorpresas" en la factura.
				</p>
			</div>
			<div class="box_bottom"></div>
			
			
			<div class="box_top">
				<h2>Portfolio:</h2>
			</div>	
			<div class="box">			
				<p><a href="http://www.acuchilladoresbilbao.com/">Acuchilladores Bilbao</a><br />
				<a href="http://www.jaramar.eu/">Jaramar</a><br />
				<a href="http://www.anestesiacolgada.com/">Anestesia Colgada</a><br />
				
				
				</p>
			</div>
			<div class="box_bottom"></div>
		</div>
		<div class="header_bottom"></div>
		<div class="footer">
			<p>
				<a href="contacto.php">Contacto</a> |  
				<a href="productos.php">Productos</a> | 
				<a href="empresa.php">Empresa</a> | 
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML</a><br />
				<a href="http://www.creacionpaginasweb.com/" title="web corportativa">&copy; Grupo Creaci&oacute;n 2006 </a>
			</p>
		</div>
	</div>
</body>
</html>