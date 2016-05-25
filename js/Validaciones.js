
function NumerosLetras(e){
	tecla = e.keyCode || e.which; 
	//base =/[0-9a-zñ]/; 
	base =/[a-zñ]/; 
	teclado = String.fromCharCode(tecla).toLowerCase(); 
	return base.test(teclado); 
}

