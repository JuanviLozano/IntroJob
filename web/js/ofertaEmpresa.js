
if ( document.getElementById("appbundle_oferta_enviar")!=null ) {

document.getElementById("appbundle_oferta_enviar").setAttribute("disabled", "disabled");

var errorTit = false;
document.getElementById("appbundle_oferta_titulo").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo título no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "titOfer");

	if (!checkText(this.value) && errorTit!=true) {
		errorTit = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorTit = false;
		if (document.getElementById("titOfer")!=null)
		document.getElementById("titOfer").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSendOfer();
}

var errorSalI = false;
document.getElementById("appbundle_oferta_salarioInicio").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Salario inicio debe ser menor que el campo Salario fin.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "salIOfer");

	var salIVal = parseInt(document.getElementById("appbundle_oferta_salarioInicio").value);
	var salFVal = parseInt(document.getElementById("appbundle_oferta_salarioFin").value);

	if ((!checkSalMin(this.value) || salIVal>=salFVal) && errorSalI!=true) {
		errorSalI = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if ((checkSalMin(this.value) && salIVal<salFVal)|| this.value=='') {
		errorSalI = false;
		if (document.getElementById("salIOfer")!=null)
		document.getElementById("salIOfer").remove();
		this.style.borderColor = "#5cb85c";

		if (document.getElementById("salMaxInfo")!=null)
		document.getElementById("salMaxInfo").remove();
		document.getElementById("appbundle_oferta_salarioFin").style.borderColor = "#5cb85c";
	}
    if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorSalF = false;
document.getElementById("appbundle_oferta_salarioFin").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Salario máximo debe ser mayor que el campo Salario mínimo.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "salMaxInfo");

	var salIVal = parseInt(document.getElementById("appbundle_oferta_salarioInicio").value);
	var salFVal = parseInt(document.getElementById("appbundle_oferta_salarioFin").value);

	if ((!checkSalMin(this.value) || salIVal>=salFVal) && errorSalF!=true) {
		errorSalF = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if ((checkSalMin(this.value) && salIVal<salFVal) || this.value=='') {
		errorSalF = false;
		if (document.getElementById("salMaxInfo")!=null)
		document.getElementById("salMaxInfo").remove();
		this.style.borderColor = "#5cb85c";

		if (document.getElementById("salIOfer")!=null)
		document.getElementById("salIOfer").remove();
		document.getElementById("appbundle_oferta_salarioInicio").style.borderColor = "#5cb85c";
	}
    if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorExp = false;
document.getElementById("appbundle_oferta_experienciaMin").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Experiencia solo puede conter letras y número. EJ: 2 años.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "expInfo");

	if (!checkText(this.value) && this.value!='' && errorExp!=true) {
		errorExp = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorExp = false;
		if (document.getElementById("expInfo")!=null)
		document.getElementById("expInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorEstMin = false;
document.getElementById("appbundle_oferta_estudiosMin").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Estudio mínimo no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "estMinInfo");

	if (!checkText(this.value) && this.value!='' && errorEstMin!=true) {
		errorEstMin = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorEstMin = false;
		if (document.getElementById("estMinInfo")!=null)
		document.getElementById("estMinInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorCat = false;
document.getElementById("appbundle_oferta_categoria").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Categoría no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "catInfo");

	if (!checkText(this.value) && this.value!='' && errorCat!=true) {
		errorCat = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorCat = false;
		if (document.getElementById("catInfo")!=null)
		document.getElementById("catInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorConoc = false;
document.getElementById("appbundle_oferta_conocimientos").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Conocimientos no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "conocInfo");

	if (!checkText(this.value) && this.value!='' && errorConoc!=true) {
		errorConoc = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorConoc = false;
		if (document.getElementById("conocInfo")!=null)
		document.getElementById("conocInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorReq = false;
document.getElementById("appbundle_oferta_requisitos").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Requisitos no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "reqInfo");

	if (!checkText(this.value) && this.value!='' && errorReq!=true) {
		errorReq = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorReq = false;
		if (document.getElementById("reqInfo")!=null)
		document.getElementById("reqInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorInd = false;
document.getElementById("appbundle_oferta_industria").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Industria no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "indInfo");

	if (!checkText(this.value) && this.value!='' && errorInd!=true) {
		errorInd = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorInd = false;
		if (document.getElementById("indInfo")!=null)
		document.getElementById("indInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorRef = false;
document.getElementById("appbundle_oferta_referencia").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Referencia no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "refInfo");

	if (!checkText(this.value) && this.value!='' && errorRef!=true) {
		errorRef = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorRef = false;
		if (document.getElementById("refInfo")!=null)
		document.getElementById("refInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorDesc = false;
document.getElementById("appbundle_oferta_descripcion").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Descripción no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "descInfo");

	if (!checkText(this.value) && errorDesc!=true) {
		errorDesc = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorDesc = false;
		if (document.getElementById("descInfo")!=null)
		document.getElementById("descInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateSendOfer();
}

var errorNiv = false;
document.getElementById("appbundle_oferta_nivel").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Nivel no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "nivInfo");

	if (!checkText(this.value) && this.value!='' && errorNiv!=true) {
		errorNiv = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorNiv = false;
		if (document.getElementById("nivInfo")!=null)
		document.getElementById("nivInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorVac = false;
document.getElementById("appbundle_oferta_nVacantes").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Número de vacantes no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "vacInfo");

	if (!checkSalMin(this.value) && this.value!='' && errorVac!=true) {
		errorVac = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkSalMin(this.value) || this.value=='') {
		errorVac = false;
		if (document.getElementById("vacInfo")!=null)
		document.getElementById("vacInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}

var errorDurCon = false;
document.getElementById("appbundle_oferta_duracionContrato").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Duración del contrato no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "durConInfo");

	if (!checkText(this.value) && this.value!='' && errorDurCon!=true) {
		errorDurCon = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value) || this.value=='') {
		errorDurCon = false;
		if (document.getElementById("durConInfo")!=null)
		document.getElementById("durConInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	if (this.value=='') this.style.borderColor = "#e8ecec";
	activateSendOfer();
}



}

function activateSendOfer() {
	if (
		checkText(document.getElementById("appbundle_oferta_titulo").value) &&
		//zcheckSalMin(document.getElementById("appbundle_oferta_salarioInicio").value) &&
		//checkSalMin(document.getElementById("appbundle_oferta_salarioFin").value) &&
		// checkText(document.getElementById("appbundle_oferta_experienciaMin").value) &&
		// checkText(document.getElementById("appbundle_oferta_estudiosMin").value) &&
		// checkText(document.getElementById("appbundle_oferta_categoria").value) &&
		// checkText(document.getElementById("appbundle_oferta_conocimientos").value) &&
		// checkText(document.getElementById("appbundle_oferta_requisitos").value) &&
		// checkText(document.getElementById("appbundle_oferta_industria").value) &&
		// checkText(document.getElementById("appbundle_oferta_referencia").value) &&
		checkText(document.getElementById("appbundle_oferta_descripcion").value)
		// checkText(document.getElementById("appbundle_oferta_nivel").value) &&
		// checkSalMin(document.getElementById("appbundle_oferta_nVacantes").value) &&
		// checkText(document.getElementById("appbundle_oferta_duracionContrato").value)
		) {
		document.getElementById("appbundle_oferta_enviar").removeAttribute("disabled");
	}
	else {
		document.getElementById("appbundle_oferta_enviar").setAttribute("disabled", "disabled");
	}
}

function checkText(value) {
	var re = /^[0-9a-záéíóúÁÉÍÓÚñÑ ?¿!¡,.;:'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

function checkSalMin(value) {
	var re = /^[0-9]\d*$/;
	if (re.test(value)) return true;
	else return false;
}