<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Compiladores</title>

		<!-- CSS de Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Librería jQuery requerida por los plugins de JavaScript -->
	    <script src="http://code.jquery.com/jquery.js"></script>

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
					<div class="col-xs-4">
						<br>
					    <img src="img/fisi.jpg" width="220" height="220">
					</div>
					<div class="col-xs-4">
						<br>
						
					    <h1>Universidad Nacional de San Martin</h1>
					    <h2>Facultad De Ingenieria De Siatemas E Informatica</h2>
					</div>
					<div class="col-xs-4">
						<br>
					    <img src="img/unsm-t.jpg" width="220" height="220">
					</div>
			</div>
			<h1>COMPILADOR V.3.1.0</h1>
			
			<div class="row" align="center">
				<form name="form1" method="post">
					<div class="col-xs-2">
					    <select class="form-control" >
						  	<option value="nombre">Nombre</option>
						  	<option value="dni">Dni</option>
						  	<!--
						  	<option value="dni">Dni</option>
						  	<option value="fecha">Fecha</option>
						  	-->
						</select>
					</div>
					<div class="col-xs-6">
					    <input type="text" class="form-control" name="palabra" placeholder="Ingresar nombre" required/>
					</div>
					<div class="col-xs-1">
					    <input type="button" class="btn btn-primary" name="buscar" value="Buscar" onClick="buscarPalabras()" >
					</div>
				</form>
			</div >
			
		</div>
		<br />
		<div class="container">
			<div class="row">
				<div id="resultado1" class="col-xs-9">
				
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