<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Compiladores</title>

		<!-- CSS de Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Librería jQuery requerida por los plugins de JavaScript -->
	    <script src="http://code.jquery.com/jquery.js"></script>
	    <script src="js/Validaciones.js"></script>

		<style>
		b{color:blue;}
		#resultado1{border:solid 1px #dadada;text-align:center;padding:5px;}
		#resultado2{border:solid 1px #dadada;text-align:center;padding:5px;}
		</style>
		<script src="ajax.js"></script>

		<!--Funcion para validar Formulario-->
		<script> 
			function validar(formulario){ 
			//aquí va el codigo// 
			} 
		</script>
	</head>

	<body>
		<div class="container" align="center">
			<div class="row">
					<div class="col-xs-2">
						<br>
					    <img src="img/unsm-t.jpg" width="180" height="180">
					</div>
					<div class="col-xs-8">
						<br>
					    <h1>   UNIVERSIDAD NACIONAL DE SAN MART&Iacute;N</h1>
					    <h2>Facultad De Ingenier&iacute;a De Sistemas E Inform&aacute;tica</h2>
					</div>
					<div class="col-md-2">
						<br>
					    <img src="img/fisi.jpg" width="180" height="180">
					</div>
			</div>
			<h3>COMPILADOR V.3.1.0</h3>
			
			<div class="row" align="center" width='700'>
				<center><form name="form1" method="post">
					<div class="col-xs-3"></div>
					<div class="col-xs-2">
					    <select class="form-control" >
						  	<option value="nombre">Nombre</option>
						  	
						  	<!--
						  	<option value="dni">Dni</option>
						  	<option value="fecha">Fecha</option>
						  	-->
						</select>
					</div>
					<div class="col-xs-3">
					    <input type="text" class="form-control" name="palabra" onkeypress="return NumerosLetras(event)" placeholder="Ingresar nombre" required  
					    maxlength="10"/>
					</div>
					<div class="col-xs-1">
					    <input type="button" class="btn btn-primary" name="buscar" value="Buscar" onClick="buscarPalabras()" >
					</div>
				</form></center>
			</div >
			
		</div>
		<br />
		<div class="container">
			<div class="row">
				<div id="resultado1" class="col-xs-12">
				
				</div>
				<!--
				<div id="resultado2" class="col-md-6">
				
				</div>
				-->
			</div>
		</div>
		<img src="" alt="" height="">
			
		</table>

		<footer>
			<br><br><br><br><br><br><br><br><br><br>
			<h6 align="center">2016 HOWELCORPORATION INC. ©TODOS LOS DERECHOS RESERVADOS</h6>
		</footer>
	</body>
</html>