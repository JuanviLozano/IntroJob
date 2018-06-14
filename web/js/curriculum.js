

// --- --- --- --- --- --- ---
//Inforemación personal
// --- --- --- --- --- --- ---

if ( document.getElementsByName("appbundle_usu_informacion")[0]!=null ) {

document.getElementById("appbundle_usu_informacion_enviar").setAttribute("disabled", "disabled");

var errorSalMin = false;
document.getElementById("appbundle_usu_informacion_expectativaSalario").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Salario mínimo debe ser menor que el campo Salario máximo.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "salMinInfo");

	var salMinVal = parseInt(document.getElementById("appbundle_usu_informacion_expectativaSalario").value);
	var salMaxVal = parseInt(document.getElementById("appbundle_usu_informacion_expectativaSalarioFinal").value);

	if ((!checkSalMin(this.value) || salMinVal>=salMaxVal) && errorSalMin!=true) {
		errorSalMin = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkSalMin(this.value) && salMinVal<salMaxVal) {
		errorSalMin = false;
		if (document.getElementById("salMinInfo")!=null)
		document.getElementById("salMinInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNext();
}

var errorSalMax = false;
document.getElementById("appbundle_usu_informacion_expectativaSalarioFinal").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Salario máximo debe ser mayor que el campo Salario mínimo.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "salMaxInfo");

	var salMinVal = parseInt(document.getElementById("appbundle_usu_informacion_expectativaSalario").value);
	var salMaxVal = parseInt(document.getElementById("appbundle_usu_informacion_expectativaSalarioFinal").value);

	if ((!checkSalMin(this.value) || salMinVal>=salMaxVal) && errorSalMax!=true) {
		errorSalMax = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkSalMin(this.value) && salMinVal<salMaxVal) {
		errorSalMax = false;
		if (document.getElementById("salMaxInfo")!=null)
		document.getElementById("salMaxInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNext();
}

var errorSec = false;
document.getElementById("appbundle_usu_informacion_industria").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Industria no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "secInfo");

	if (!checkText(this.value) && errorSec!=true) {
		errorSec = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorSec = false;
		if (document.getElementById("secInfo")!=null)
		document.getElementById("secInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNext();
}

var errorExp = false;
document.getElementById("appbundle_usu_informacion_experiencia").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Experiencia solo puede conter letras y número. EJ: 2 años.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "expInfo");

	if (!checkText(this.value) && errorExp!=true) {
		errorExp = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorExp = false;
		if (document.getElementById("expInfo")!=null)
		document.getElementById("expInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNext();
}

var errorTit = false;
document.getElementById("appbundle_usu_informacion_nivelCarrera").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Nivel de la carrera no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "titInfo");

	if (!checkText(this.value) && errorTit!=true) {
		errorTit = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorTit = false;
		if (document.getElementById("titInfo")!=null)
		document.getElementById("titInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNext();
}

var errorPers = false;
document.getElementById("appbundle_usu_informacion_infoPersonal").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("El campo Información personal no puede estar en blanco.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "persInfo");

	if (!checkTextL(this.value) && errorPers!=true) {
		errorPers = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkTextL(this.value)) {
		errorPers = false;
		if (document.getElementById("persInfo")!=null)
		document.getElementById("persInfo").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNext();
}

}

function activateNext() {
	if (
		checkSalMin(document.getElementById("appbundle_usu_informacion_expectativaSalario").value) &&
		checkSalMin(document.getElementById("appbundle_usu_informacion_expectativaSalarioFinal").value) &&
		checkText(document.getElementById("appbundle_usu_informacion_industria").value) &&
		checkText(document.getElementById("appbundle_usu_informacion_experiencia").value) &&
		checkText(document.getElementById("appbundle_usu_informacion_nivelCarrera").value) &&
		checkTextL(document.getElementById("appbundle_usu_informacion_infoPersonal").value)
		) {
		if (document.getElementById("appbundle_usu_informacion_expectativaSalario").value>=
			document.getElementById("appbundle_usu_informacion_expectativaSalarioFinal").value) {
			var node = document.createElement("P");var textnode = document.createTextNode("Salario mínimo debe ser menor que salario máximo.");
			node.appendChild(textnode);
			node.setAttribute("style", "color: red");
			node.setAttribute("id", "salMinMaxInfo");
			if (document.getElementById("salMinMaxInfo")==null)
			document.getElementById("appbundle_usu_informacion_expectativaSalario").after(node);
		}
		else {
			if (document.getElementById("salMinMaxInfo")!=null)
			document.getElementById("salMinMaxInfo").remove();
			document.getElementById("appbundle_usu_informacion_enviar").removeAttribute("disabled");
		}
	}
	else {
		document.getElementById("appbundle_usu_informacion_enviar").setAttribute("disabled", "disabled");
	}
}

function checkSalMin(value) {
	var re = /^[0-9]\d*$/;
	if (re.test(value)) return true;
	else return false;
}

function checkText(value) {
	var re = /^[0-9a-záéíóúÁÉÍÓÚñÑ ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

function checkTextL(value) {
	var re = /^[\n0-9a-záéíóúÁÉÍÓÚñÑ ,.'-]+$/i;
	if (re.test(value)) return true;
	else return false;
}

// --- --- --- --- --- --- ---
//Estudios
// --- --- --- --- --- --- ---

if ( document.getElementsByName("appbundle_usu_educacion")[0]!=null ) {

document.getElementById("appbundle_usu_educacion_fechaInicio").setAttribute('placeholder', 'mm/yyyy');
document.getElementById("appbundle_usu_educacion_fechaFin").setAttribute('placeholder', 'mm/yyyy');

document.getElementById("appbundle_usu_educacion_enviar").setAttribute("disabled", "disabled");

var errorNivEd = false;
document.getElementById("appbundle_usu_educacion_tipo").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Nivel educativo incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "NivEdExp");

	if (!checkText(this.value) && errorNivEd!=true) {
		errorNivEd = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorNivEd = false;
		if (document.getElementById("NivEdExp")!=null)
		document.getElementById("NivEdExp").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNextEst();
}

var errorCent = false;
document.getElementById("appbundle_usu_educacion_centro").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Centro incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "centExp");

	if (!checkText(this.value) && errorCent!=true) {
		errorCent = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorCent = false;
		if (document.getElementById("centExp")!=null)
		document.getElementById("centExp").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNextEst();
}

var errorFechIEst = false;
document.getElementById("appbundle_usu_educacion_fechaInicio").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Fecha inicio incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "FechIEstExp");

	var inicioF = document.getElementById("appbundle_usu_educacion_fechaInicio").value;
	var finF = document.getElementById("appbundle_usu_educacion_fechaFin").value;

	if (!checkFechaRangoEstudios(inicioF, finF) && errorFechIEst!=true) {
		errorFechIEst = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkFechaRangoEstudios(inicioF, finF)) {
		errorFechIEst = false;
		if (document.getElementById("FechIEstExp")!=null)
		document.getElementById("FechIEstExp").remove();
		this.style.borderColor = "#5cb85c";

		if (document.getElementById("FechFEstExp")!=null)
		document.getElementById("FechFEstExp").remove();
		document.getElementById("appbundle_usu_educacion_fechaFin").style.borderColor = "#5cb85c";
	}
	activateNextEst();
}

var errorFechFEst = false;
document.getElementById("appbundle_usu_educacion_fechaFin").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Fecha fin incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "FechFEstExp");

	var inicioF = document.getElementById("appbundle_usu_educacion_fechaInicio").value;
	var finF = document.getElementById("appbundle_usu_educacion_fechaFin").value;

	if (!checkFechaRangoEstudios(inicioF, finF) && errorFechFEst!=true) {
		errorFechFEst = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkFechaRangoEstudios(inicioF, finF)) {
		errorFechFEst = false;
		if (document.getElementById("FechFEstExp")!=null)
		document.getElementById("FechFEstExp").remove();
		this.style.borderColor = "#5cb85c";

		if (document.getElementById("FechIEstExp")!=null)
		document.getElementById("FechIEstExp").remove();
		document.getElementById("appbundle_usu_educacion_fechaInicio").style.borderColor = "#5cb85c";
	}
	activateNextEst();
}

}

function activateNextEst() {
	if (
		checkText(document.getElementById("appbundle_usu_educacion_tipo").value) &&
		checkText(document.getElementById("appbundle_usu_educacion_centro").value) &&
		checkFechaRangoEstudios(document.getElementById("appbundle_usu_educacion_fechaInicio").value, document.getElementById("appbundle_usu_educacion_fechaFin").value)
		) {
		document.getElementById("appbundle_usu_educacion_enviar").removeAttribute("disabled");
	}
	else {
		document.getElementById("appbundle_usu_educacion_enviar").setAttribute("disabled", "disabled");
	}
}

function checkFechaRangoEstudios(inicio, fin) {
	var regex = /(\d+)/g;
	if (inicio!='' && fin!='') {
	    var mI = inicio.match(regex)[0];
	    var aI = inicio.match(regex)[1];
    	var mF = fin.match(regex)[0];
    	var aF = fin.match(regex)[1];
    	if (mI>=1 && mI<=12 && mF>=1 && mF<=12 && aI>1900 && aI<2100 && aF>1900 && aF<2100) {
		    if (aI==aF) {
		    	if (mI<mF) {
		    		return true;
		    	}
		    }
		    else if (aI<aF) {
		    	return true;
		    }
		    else {
		    	return false;
		    }
		}
	}
}


// --- --- --- --- --- --- ---
//Experiencia laboral
// --- --- --- --- --- --- ---

if ( document.getElementsByName("appbundle_usu_exp_laboral")[0]!=null ) {

document.getElementById("appbundle_usu_exp_laboral_enviar").setAttribute("disabled", "disabled");

var errorOfi = false;
document.getElementById("appbundle_usu_exp_laboral_oficio").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Oficio realizado incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "ofiExp");

	if (!checkText(this.value) && errorOfi!=true) {
		errorOfi = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorOfi = false;
		if (document.getElementById("ofiExp")!=null)
		document.getElementById("ofiExp").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNextExp();
}

var errorEmp = false;
document.getElementById("appbundle_usu_exp_laboral_nombreEmpresa").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Nombre de la empresa incorrecto.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "empExp");

	if (!checkText(this.value) && errorEmp!=true) {
		errorEmp = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkText(this.value)) {
		errorEmp = false;
		if (document.getElementById("empExp")!=null)
		document.getElementById("empExp").remove();
		this.style.borderColor = "#5cb85c";
	}
	activateNextExp();
}

var errorFechI = false;
document.getElementById("appbundle_usu_exp_laboral_fechaInicio").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Fecha inicio incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "FechIExp");

	var inicioF = document.getElementById("appbundle_usu_exp_laboral_fechaInicio").value;
	var finF = document.getElementById("appbundle_usu_exp_laboral_fechaFin").value;

	if (!checkFechaRangoEstudios(inicioF, finF) && errorFechI!=true) {
		errorFechI = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkFechaRangoEstudios(inicioF, finF)) {
		errorFechI = false;
		if (document.getElementById("FechIExp")!=null)
		document.getElementById("FechIExp").remove();
		this.style.borderColor = "#5cb85c";

		if (document.getElementById("FechFExp")!=null)
		document.getElementById("FechFExp").remove();
		document.getElementById("appbundle_usu_exp_laboral_fechaFin").style.borderColor = "#5cb85c";
	}
	activateNextExp();
}

var errorFechF = false;
document.getElementById("appbundle_usu_exp_laboral_fechaFin").onkeyup = function() {
	var node = document.createElement("P");
	var textnode = document.createTextNode("Fecha fin incorrecta.");
	node.appendChild(textnode);
	node.setAttribute("style", "color: red");
	node.setAttribute("id", "FechFExp");

	var inicioF = document.getElementById("appbundle_usu_exp_laboral_fechaInicio").value;
	var finF = document.getElementById("appbundle_usu_exp_laboral_fechaFin").value;

	if (!checkFechaRangoEstudios(inicioF, finF) && errorFechF!=true) {
		errorFechF = true;
		this.after(node);
		this.style.borderColor = "red";
	}
	else if (checkFechaRangoEstudios(inicioF, finF)) {
		errorFechF = false;
		if (document.getElementById("FechFExp")!=null)
		document.getElementById("FechFExp").remove();
		this.style.borderColor = "#5cb85c";

		if (document.getElementById("FechIExp")!=null)
		document.getElementById("FechIExp").remove();
		document.getElementById("appbundle_usu_exp_laboral_fechaInicio").style.borderColor = "#5cb85c";
	}
	activateNextExp();
}

}

function activateNextExp() {
	if (
		checkText(document.getElementById("appbundle_usu_exp_laboral_oficio").value) &&
		checkText(document.getElementById("appbundle_usu_exp_laboral_nombreEmpresa").value) &&
		checkFechaRangoEstudios(document.getElementById("appbundle_usu_exp_laboral_fechaInicio").value, document.getElementById("appbundle_usu_exp_laboral_fechaFin").value)
		) {
		document.getElementById("appbundle_usu_exp_laboral_enviar").removeAttribute("disabled");
	}
	else {
		document.getElementById("appbundle_usu_exp_laboral_enviar").setAttribute("disabled", "disabled");
	}
}

function checkFecha(value) {
	var re = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]|(?:Jan|Mar|May|Jul|Aug|Oct|Dec)))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2]|(?:Jan|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec))\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)(?:0?2|(?:Feb))\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9]|(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep))|(?:1[0-2]|(?:Oct|Nov|Dec)))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
	if (re.test(value)) return true;
	else return false;
}

function checkFechaRango(inicio, fin) {
	var i = Date.parse(inicio);
	var f = Date.parse(fin);
	if (i<f) {
		if (document.getElementById("fechaRExp")!=null)
			document.getElementById("fechaRExp").remove();
		return true;
	}
	else {

		var node = document.createElement("P");
		var textnode = document.createTextNode("Fecha inicio debe ser menor que fecha fin.");
		node.appendChild(textnode);
		node.setAttribute("style", "color: red");
		node.setAttribute("id", "fechaRExp");
		if (document.getElementById("fechaRExp")==null)
		document.getElementById("appbundle_usu_exp_laboral_fechaInicio").after(node);

		return false;
	}
}