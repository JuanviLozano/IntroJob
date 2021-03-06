

// --- --- --- --- --- --- ---
//Primera parte de registro
// --- --- --- --- --- --- ---

document.getElementById("edu-siguiente").setAttribute("disabled", "disabled");

var errorUsu = false;
document.getElementById("appbundle_usuario_username").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Nombre usuario incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "usuReg");

	if (!checkNombreUsu(this.value) && errorUsu!=true) {
		errorUsu = true;
		this.after(node);
	}
	else if (checkNombreUsu(this.value)) {
		errorUsu = false;
		if (document.getElementById("usuReg")!=null)
		document.getElementById("usuReg").remove();
	}
	activateNext();
}

var errorPass = false;
document.getElementById("appbundle_usuario_password").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Contraseña incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "passReg");

	if (!checkPass(this.value) && errorPass!=true) {
		errorPass = true;
		this.after(node);
	}
	else if (checkPass(this.value)) {
		errorPass = false;
		if (document.getElementById("passReg")!=null)
		document.getElementById("passReg").remove();
	}
	activateNext();
}

var errorEmail = false;
document.getElementById("appbundle_usuario_email").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Email incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "emailReg");

	if (!checkEmail(this.value) && errorEmail!=true) {
		errorEmail = true;
		this.after(node);
	}
	else if (checkEmail(this.value)) {
		errorEmail = false;
		if (document.getElementById("emailReg")!=null)
		document.getElementById("emailReg").remove();
	}
	activateNext();
}

function activateNext() {
	if (
		checkNombreUsu(document.getElementById("appbundle_usuario_username").value) &&
		checkPass(document.getElementById("appbundle_usuario_password").value) &&
		checkEmail(document.getElementById("appbundle_usuario_email").value)
		) {
		document.getElementById("edu-siguiente").removeAttribute("disabled");
	}
	else {
		document.getElementById("edu-siguiente").setAttribute("disabled", "disabled");
	}
}

function checkNombreUsu(value) {
	if (value.length<6) {
		return false;
	}
	else {
		return true;
	}
}

function checkPass(value) {
	//Mínimo 8 carácteres y al menos una letra y un número
	var re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	if (re.test(value)) return true;
	else return false;
}

function checkEmail(value) {
	//Email
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (re.test(value)) return true;
	else return false;
}


// --- --- --- --- --- --- ---
//Segunda parte de registro
// --- --- --- --- --- --- ---

document.getElementById("expe-siguiente").setAttribute("disabled", "disabled");

var errorNom = false;
document.getElementById("appbundle_usuario_nombre").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Nombre incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "nomReg");

	if (!checkNombre(this.value) && errorNom!=true) {
		errorNom = true;
		this.after(node);
	}
	else if (checkNombre(this.value)) {
		errorNom = false;
		if (document.getElementById("nomReg")!=null)
		document.getElementById("nomReg").remove();
	}
	activateNextExpe();
}

var errorApe = false;
document.getElementById("appbundle_usuario_apellidos").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Apellidos incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "apeReg");

	if (!checkNombre(this.value) && errorApe!=true) {
		errorApe = true;
		this.after(node);
	}
	else if (checkNombre(this.value)) {
		errorApe = false;
		if (document.getElementById("apeReg")!=null)
		document.getElementById("apeReg").remove();
	}
	activateNextExpe();
}

var errorFechaNac = false;
document.getElementById("appbundle_usuario_fecha_nacimiento").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Fecha de nacimiento incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "fechaNacReg");

	if (!checkFechaNac(this.value) && errorFechaNac!=true) {
		errorFechaNac = true;
		this.after(node);
	}
	else if (checkFechaNac(this.value)) {
		errorFechaNac = false;
		if (document.getElementById("fechaNacReg")!=null)
		document.getElementById("fechaNacReg").remove();
	}
	activateNextExpe();
}

function activateNextExpe() {
	if (
		checkNombre(document.getElementById("appbundle_usuario_nombre").value) &&
		checkNombre(document.getElementById("appbundle_usuario_apellidos").value) &&
		checkFechaNac(document.getElementById("appbundle_usuario_fecha_nacimiento").value)
		) {
		document.getElementById("expe-siguiente").removeAttribute("disabled");
	}
	else {
		document.getElementById("expe-siguiente").setAttribute("disabled", "disabled");
	}
}

function checkNombre(value) {
	//Nombre o apellido
	var re = /^[a-z ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

function checkFechaNac(value) {
	//Fecha
	var re = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]|(?:Jan|Mar|May|Jul|Aug|Oct|Dec)))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2]|(?:Jan|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec))\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)(?:0?2|(?:Feb))\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9]|(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep))|(?:1[0-2]|(?:Oct|Nov|Dec)))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
	if (re.test(value)) return true;
	else return false;
}


// --- --- --- --- --- --- ---
//Tercera parte de registro
// --- --- --- --- --- --- ---

document.getElementById("habili-siguiente").setAttribute("disabled", "disabled");

var errorDir = false;
document.getElementById("appbundle_usuario_direccion").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Dirección incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "dirReg");

	if (!checkDireccion(this.value) && errorDir!=true) {
		errorDir = true;
		this.after(node);
	}
	else if (checkDireccion(this.value)) {
		errorDir = false;
		if (document.getElementById("dirReg")!=null)
		document.getElementById("dirReg").remove();
	}
	activateNextHabili();
}

var errorCod = false;
document.getElementById("appbundle_usuario_cod_postal").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Código postal incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "codReg");

	if (!checkCodPostal(this.value) && errorCod!=true) {
		errorCod = true;
		this.after(node);
	}
	else if (checkCodPostal(this.value)) {
		errorCod = false;
		if (document.getElementById("codReg")!=null)
		document.getElementById("codReg").remove();
	}
	activateNextHabili();
}

function activateNextHabili() {
	if (
		checkDireccion(document.getElementById("appbundle_usuario_direccion").value) &&
		checkCodPostal(document.getElementById("appbundle_usuario_cod_postal").value)
		) {
		document.getElementById("habili-siguiente").removeAttribute("disabled");
	}
	else {
		document.getElementById("habili-siguiente").setAttribute("disabled", "disabled");
	}
}

function checkDireccion(value) {
	//Direccion
	var re = /^[a-z ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

function checkCodPostal(value) {
	//Código Postal
	var re = /^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/;
	if (re.test(value)) return true;
	else return false;
}


// --- --- --- --- --- --- ---
//Cuarta parte de registro
// --- --- --- --- --- --- ---

document.getElementById("appbundle_usuario_Enviar").setAttribute("disabled", "disabled");

var errorTelf = false;
document.getElementById("appbundle_usuario_telefono").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Teléfono móvil incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "telfReg");

	if (!checkTelefono(this.value) && errorTelf!=true) {
		errorTelf = true;
		this.after(node);
	}
	else if (checkTelefono(this.value)) {
		errorTelf = false;
		if (document.getElementById("telfReg")!=null)
		document.getElementById("telfReg").remove();
	}
	activateSend();
}

var errorEsp = false;
document.getElementById("appbundle_usuario_especialidad").onblur = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Especialidad incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "espReg");

	if (!checkEspecialidad(this.value) && errorEsp!=true) {
		errorEsp = true;
		this.after(node);
	}
	else if (checkEspecialidad(this.value)) {
		errorEsp = false;
		if (document.getElementById("espReg")!=null)
		document.getElementById("espReg").remove();
	}
	activateSend();
}

function activateSend() {
	if (
		checkTelefono(document.getElementById("appbundle_usuario_telefono").value) &&
		checkEspecialidad(document.getElementById("appbundle_usuario_especialidad").value)
		) {
		document.getElementById("appbundle_usuario_Enviar").removeAttribute("disabled");
	}
	else {
		document.getElementById("appbundle_usuario_Enviar").setAttribute("disabled", "disabled");
	}
}

function checkTelefono(value) {
	//Teléfono
	var re = /^[9|6|7][0-9]{8}$/;
	if (re.test(value)) return true;
	else return false;
}

function checkEspecialidad(value) {
	//Especialidad
	var re = /^[a-z ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}