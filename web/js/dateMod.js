
var fechaCreacion = document.getElementById('fechaCreacionJS').innerHTML;

var currentdate = new Date();

var regex = /(\d+)/g;
var dC = fechaCreacion.match(regex)[0];
var mC = fechaCreacion.match(regex)[1];
var aC = fechaCreacion.match(regex)[2];
var hC = fechaCreacion.match(regex)[3];
var minC = fechaCreacion.match(regex)[4];
var sC = fechaCreacion.match(regex)[5];

var month = ["January", "February", "March", "April", "May", "June",
"July", "August", "September", "October", "November", "December"];
switch (parseInt(mC)) {
	case 1:
		mC=month[0];
		break;
	case 2:
		mC=month[1];
		break;
	case 3:
		mC=month[2];
		break;
	case 4:
		mC=month[3];
		break;
	case 5:
		mC=month[4];
		break;
	case 6:
		mC=month[5];
		break;
	case 7:
		mC=month[6];
		break;
	case 8:
		mC=month[7];
		break;
	case 9:
		mC=month[8];
		break;
	case 10:
		mC=month[9];
		break;
	case 11:
		mC=month[10];
		break;
	case 12:
		mC=month[11];
		break;
	default:
		console.log('error');
		break;
}

var values = fechaCreacion.split(" ");
var f_name = values[0];
var horaCreacion = values[1] ? fechaCreacion.substr(fechaCreacion.indexOf(' ') + 1) : '';
console.log(horaCreacion);

var dateCreation = new Date(mC+' '+dC+', '+aC+' '+horaCreacion);
console.log(dateCreation);
console.log(currentdate);

var hoursT = Math.abs(dateCreation - currentdate) / 36e5;
console.log(hoursT);
if (parseInt(hoursT)!=0) {
	if (parseInt(hoursT)>24) {
		var diffDays = Math.round(Math.abs((dateCreation.getTime() - currentdate.getTime())/(24*60*60*1000)));
		document.getElementById('fechaCreacionJS').innerHTML = "Hace "+parseInt(diffDays)+"d";
	}
	else {
		document.getElementById('fechaCreacionJS').innerHTML = "Hace "+parseInt(hoursT)+"h";
	}
}
else {
	document.getElementById('fechaCreacionJS').innerHTML = "Hace menos de una hora";
}

