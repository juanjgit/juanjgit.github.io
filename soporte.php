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
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->
<?php
$sid="422067";
include("/home/creacion/creacionpaginasweb.com/estadisticas/write_logs.php");
?>

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
      					<li><a href="contacto.php">Contacto</a></li>
      					<li id="current"><a href="soporte.php">Zona Clientes</a></li>
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
		 <a href="http://creacion.top-play-ringtones.com/sections/especiales/especial-halloween.htm" target="_blank"><img src="http://www.kekuko.com/g_banners/img/391_468x60-halloween.gif" width="468" height="60" border="0"></a>
		</div>
		<div class="header_top"></div>
		<div class="left">
			<div class="left_side">
				<div class="box_top">
					<h2>Acceso webmail:</h2>
				</div>	
				<div class="box">			
					<form action="http://webmail.dreamhost.com/src/redirect.php" method="post">
					<fieldset>
						<p><label for="login">E-mail:</label><input type="text" id="login" name="login_username" size="10" /></p>
						<p><label for="passwd">Pass:</label><input type="password" id="passwd" name="secretkey" size="10" /></p>
						<p class="centrado"><input class="submit" type="submit" value="entrar" name="Entrar" /></p>
					</fieldset>
					</form>
				</div>
				<div class="box_bottom"></div>
			</div>
			<div class="right_side">
				<div class="article">
					<h2>Formulario de contacto</h2>

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
$autosubject = "Gracias por su interés";
// autoresponse message
$automessage = "Hemos recibido su solicitud. En breve nos pondremos en contacto con usted. Muchas Gracias por su confianza.";
// thankyou displayed after the user clicks "submit"
$thanks = "Hemos recibido su solicitud.<br>Nos pondremos en contacto con usted con la mayor brevedad.<br>";
// END OF NECESSARY MODIFICATIONS
?>

<?php 
if($_POST['submitform']) 
{
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Comments = $_POST['Comments'];
      // check required fields
      $dcheck = explode(",",$_POST['require']);
      while(list($check) = each($dcheck)) {
      if(!$$dcheck[$check])
      {
            $error .= "Missing $dcheck[$check]<br>";
      }
}
// check email address
if ((!ereg(".+\@.+\..+", $Email)) || (!ereg("^[a-zA-Z0-9_@.-]+$", $Email))){
$error .= "Dirección de email no v&aacute;lida<br>";}
// display errors
if($error) {
?>
                  <b>Error</b><br>

<?php echo $error; ?><br>

                  <a href="#" onclick="history.go(-1)">probar de nuevo</a>
<?php }
else
{
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
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
}
}
else {
?>

                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <fieldset>
					<input name="require" value="Name,Email,Comments" type="hidden"/>
                    <table width="400">
                      <tbody>
                        <tr>

                          <td colspan="2">
                         Rellene el formulario con una descripción detallada del problema. Nuestros técnicos tomarán parte de la incidencia y le responderán con la mayor brevedad. Tambi&eacute;n puede dejar un mensaje o mandar un FAX al  940 46 74 42.
                          </td>

                        </tr>
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

                          <td valign="top"><textarea name="Comments" rows="5" cols="35"></textarea></td>

                        </tr>
                        <tr>

                          <td colspan="2" align="center">
						  <input value="Enviar" class="submit" name="submitform" type="submit"/>
                          <input value="Borrar" class="submit" name="reset" type="reset"/>
						</td>
						
                        </tr>
                      </tbody>
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
				<h2>Noticias:</h2>
			</div>	
			<div class="box">	
				<h3>12/03/07: Contrataci&oacute;n On-Line</h3>
				<p>
				Ya puede contratar nuestros servicios de alojamiento desde la web. Se aceptan pagos con PayPal, VISA, Master Card y transferencia bancaria.
				</p>			
				<h3>06/03/07: Nuevos servidores</h3>
				<p>
				Durante los pr&oacute;ximos d&iacute;as se va a proceder a mudar los servicios de web y correo a otros servidores de mayor capacidad.
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
				<a href="http://www.creacionpaginasweb.com/" title="web corportativa">&copy; Grupo Creaci&oacute;n 2007 </a>
			</p>
		</div>
	</div>
</body>
</html>
