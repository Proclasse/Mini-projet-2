function test_nom() {
	var nombre_lettre = document.getElementById('champ_nom').value.length;
	if (nombre_lettre >= 3) {
		document.getElementById('check_nom').style.display = 'inline';
		document.getElementById('uncheck_nom').style.display = 'none';
	}
	else {
		document.getElementById('uncheck_nom').style.display = 'inline';
		document.getElementById('check_nom').style.display = 'none';
	}
}

function test_mail() {
	//var reg = new RegExp("^[a-z0-9]+([_|\.|-]{1}[a-Z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$", "i");
	var reg = new RegExp ("[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,}$", "i");
	if (reg.test(document.getElementById('champ_mail').value)) {
		document.getElementById('check_mail').style.display = 'inline';
		document.getElementById('uncheck_mail').style.display = 'none';
	} 
	else {
		document.getElementById('check_mail').style.display = 'none';
	}
}

function test_submit() {
	if (document.getElementById('check_mail').style.display == 'inline' && document.getElementById('check_nom').style.display == 'inline'){
		document.getElementById('submit_button').disabled = false;
	}
	else {
	document.getElementById('submit_button').disabled = true;	
	}
}
