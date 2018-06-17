
if ( document.getElementById("appbundle_empresa_enviar")!=null ) {

document.getElementById("appbundle_empresa_enviar").setAttribute("disabled", "disabled");

activateSend();

var errorEmail = false;
document.getElementById("appbundle_empresa_email").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Email incorrecto. EJ: tuemail@gmail.com");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "emailReg");

	if (!checkEmail(this.value) && errorEmail!=true) {
		errorEmail = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkEmail(this.value)) {
		errorEmail = false;
		if (document.getElementById("emailReg")!=null)
		document.getElementById("emailReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorPass = false;
document.getElementById("appbundle_empresa_password_first").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo contraseña debe contener 8 caracteres entre letras y números.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "passReg");

	if (!checkPass(this.value) && errorPass!=true) {
		errorPass = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkPass(this.value)) {
		errorPass = false;
		if (document.getElementById("passReg")!=null)
		document.getElementById("passReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorPassS = false;
document.getElementById("appbundle_empresa_password_second").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Contraseña incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "passSReg");

	var passF = document.getElementById("appbundle_empresa_password_first").value;

	if ((!checkPass(this.value) || this.value!=passF) && errorPassS!=true) {
		errorPassS = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkPass(this.value) && this.value==passF) {
		errorPassS = false;
		if (document.getElementById("passSReg")!=null)
		document.getElementById("passSReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorNom = false;
document.getElementById("appbundle_empresa_nombre").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo nombre no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "nomReg");

	if (!checkNombre(this.value) && errorNom!=true) {
		errorNom = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkNombre(this.value)) {
		errorNom = false;
		if (document.getElementById("nomReg")!=null)
		document.getElementById("nomReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorNomA = false;
document.getElementById("appbundle_empresa_alias").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo alias no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "nomAReg");

	if (!checkNombre(this.value) && errorNomA!=true) {
		errorNomA = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkNombre(this.value)) {
		errorNomA = false;
		if (document.getElementById("nomAReg")!=null)
		document.getElementById("nomAReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorMun = false;
document.getElementById("appbundle_empresa_municipio").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo municipio no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "munReg");

	if (!checkNombre(this.value) && errorMun!=true) {
		errorMun = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkNombre(this.value)) {
		errorMun = false;
		if (document.getElementById("munReg")!=null)
		document.getElementById("munReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorCod = false;
document.getElementById("appbundle_empresa_codigoPostal").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Código postal consta de 5 dígitos.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "codReg");

	if (!checkCodPostal(this.value) && errorCod!=true) {
		errorCod = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkCodPostal(this.value)) {
		errorCod = false;
		if (document.getElementById("codReg")!=null)
		document.getElementById("codReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorDir = false;
document.getElementById("appbundle_empresa_direccion").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Dirección no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "dirReg");

	if (!checkDireccion(this.value) && errorDir!=true) {
		errorDir = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkDireccion(this.value)) {
		errorDir = false;
		if (document.getElementById("dirReg")!=null)
		document.getElementById("dirReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorTelf = false;
document.getElementById("appbundle_empresa_telefono").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Teléfono debe empezar por 9|6|7 y consta de 9 dígitos.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "telfReg");

	if (!checkTelefono(this.value) && errorTelf!=true) {
		errorTelf = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkTelefono(this.value)) {
		errorTelf = false;
		if (document.getElementById("telfReg")!=null)
		document.getElementById("telfReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorWeb = false;
document.getElementById("appbundle_empresa_web").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("EJ: example.com");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "webReg");

	if (!checkWeb(this.value) && this.value!='' && errorWeb!=true) {
		errorWeb = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkWeb(this.value) || this.value=='') {
		errorWeb = false;
		if (document.getElementById("webReg")!=null)
		document.getElementById("webReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

var errorDesc = false;
document.getElementById("appbundle_empresa_descripcion").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Descripción no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "descReg");

	if (!checkText(this.value) && errorDesc!=true) {
		errorDesc = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorDesc = false;
		if (document.getElementById("descReg")!=null)
		document.getElementById("descReg").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSend();
}

document.getElementById("appbundle_empresa_imagen").setAttribute("required","required");
var node = document.createElement("P");
var textnode = document.createTextNode("*Imagen obligatoria.");
node.appendChild(textnode);
node.setAttribute("style", "color: orange");
node.setAttribute("id","imgReg");
document.getElementById("appbundle_empresa_imagen").parentNode.parentNode.after(node);

}

function activateSend() {
	if (
		checkEmail(document.getElementById("appbundle_empresa_email").value) &&
		//checkPass(document.getElementById("appbundle_empresa_password_first").value) &&
		//checkPass(document.getElementById("appbundle_empresa_password_second").value) &&
		checkNombre(document.getElementById("appbundle_empresa_nombre").value) &&
		checkNombre(document.getElementById("appbundle_empresa_alias").value) &&
		checkNombre(document.getElementById("appbundle_empresa_municipio").value) &&
		checkCodPostal(document.getElementById("appbundle_empresa_codigoPostal").value) &&
		checkDireccion(document.getElementById("appbundle_empresa_direccion").value) &&
		checkTelefono(document.getElementById("appbundle_empresa_telefono").value) &&
		checkText(document.getElementById("appbundle_empresa_descripcion").value)
		//checkWeb(document.getElementById("appbundle_empresa_web").value)
		) {
		console.log('entra');
		if (document.getElementsByTagName('H3')[0].innerHTML == "Edicion de la empresa") {
			if (document.getElementById("appbundle_empresa_password_first").value=='' &&
				document.getElementById("appbundle_empresa_password_second").value=='') {
				console.log('here');
				document.getElementById("appbundle_empresa_enviar").removeAttribute("disabled");
			}
			else {
				if (
				checkPass(document.getElementById("appbundle_empresa_password_first").value) &&
				checkPass(document.getElementById("appbundle_empresa_password_second").value)
				) {
					document.getElementById("appbundle_empresa_enviar").removeAttribute("disabled");
				}
				else {
					document.getElementById("appbundle_empresa_enviar").setAttribute("disabled", "disabled");
				}
			}
		}
		else {
			if (
			checkPass(document.getElementById("appbundle_empresa_password_first").value) &&
			checkPass(document.getElementById("appbundle_empresa_password_second").value)
			) {
				document.getElementById("appbundle_empresa_enviar").removeAttribute("disabled");
			}
		}
	}
	else {
		document.getElementById("appbundle_empresa_enviar").setAttribute("disabled", "disabled");
	}
}

function checkEmail(value) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (re.test(value)) return true;
	else return false;
}

function checkPass(value) {
	//Mínimo 8 carácteres y al menos una letra y un número
	var re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	if (re.test(value)) return true;
	else return false;
}

function checkNombre(value) {
	var re = /^[a-záéíóúÁÉÍÓÚñÑ ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

function checkCodPostal(value) {
	var re = /^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/;
	if (re.test(value)) return true;
	else return false;
}

function checkDireccion(value) {
	var re = /^[0-9a-záéíóúÁÉÍÓÚñÑ ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

function checkTelefono(value) {
	var re = /^[9|6|7][0-9]{8}$/;
	if (re.test(value)) return true;
	else return false;
}

function checkWeb(value) {
	var re = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
	if (re.test(value)) return true;
	else return false;
}

function checkText(value) {
	var re = /^[0-9a-záéíóúÁÉÍÓÚñÑ ?¿!¡,.;:'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}