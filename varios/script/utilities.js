function displayDate()
{
	document.getElementById("demo").value;
}

function selectFull()
{
	
	selectCore();
	document.getElementById("5").checked = true;
	document.getElementById("6").checked = true;
	document.getElementById("7").checked = true;
	document.getElementById("8").checked = true;
	document.getElementById("9").checked = true;
	document.getElementById("10").checked = true;
	document.getElementById("11").checked = true;
	document.getElementById("12").checked = true;
	document.getElementById("13").checked = true;
	document.getElementById("14").checked = true;
	document.getElementById("15").checked = true;
	document.getElementById("16").checked = true;
	document.getElementById("17").checked = true;
	document.getElementById("18").checked = true;
	document.getElementById("19").checked = true;
	document.getElementById("20").checked = true;
}

function selectCore()
{
	Clear()
	//window.alert("entro en el script");
	document.getElementById("1").checked = true;
	document.getElementById("2").checked = true;
	document.getElementById("3").checked = true;
	document.getElementById("4").checked = true;
	document.getElementById("35").checked = true;


}

function Clear(){ 
   //document.getElementById("checkbox").checked = true;
   var elementos = document.getElementsByName("checkbox");
   for (x=0;x<elementos.length;x++)
   	elementos[x].checked = false;

} 



function crearCampos(){
	


	//Obtengo el Div con el ID Directores para luego ser modificado
	var divDirectors = document.getElementById("divDirectors");	
	//obtengo todos los elemento tipo texto y label para luego asignarle un nuevo ID al nuevo elemento 
	var totText = document.getElementsByName("txtDirector");
	var totLabel = document.getElementsByName("labelDirector")
	var totdivDirect = document.getElementsByName("divDirect")

	//Se crea una variable para usarlo de indice para verificar si los campos estan null, si no lo estan se crean los campos dinamicos nuevos
	var valiDirector =document.getElementById("txtDirectors"+totText.length);
	var valiLegal =document.getElementById("txtLegals"+totText.length);
	//window.alert(valiDirector);

	//Verifica si los campos estan en null
	if (valiDirector.value!="" && valiLegal.value!= "") 
	{

		//inavilita el botton borrar y los campos de texto anterior si es el segun Div creado
		
		if (totText.length >=1 ) {
			valiDirector.disabled = true;
			valiLegal.disabled = true;

		};
		if (totText.length >1) 
		{
			//window.alert("Es el segundo div creado");
			var enableBtn = document.getElementById("btnDelete"+(totText.length));
			enableBtn.disabled = true;
			
		}; 

	//window.alert("hay "+totText.length+" textos "+" y "+ totLabel.length+" label");
	//Creo los elemento tipo Texto y Label
	var txtdirectr = document.createElement("input");
	var labeldirectr = document.createElement("label");
	var txtlegal  = document.createElement("input");
	var labellegal  = document.createElement("label");
	var divDirect = document.createElement("div");
	var btnDelete = document.createElement("button");
	var br = document.createElement("br");
	// tabla
	var tabla = document.createElement("table");
	var lineaDirectr = document.createElement("tr");
	var lineaLegal = document.createElement("tr");
	var celdaDirectrLable = document.createElement("td");
	var celdaDirectrText = document.createElement("td")
	var celdaLegalLable = document.createElement("td")
	var celdaLegalText = document.createElement("td")
	

	//Le asigno las propiedades de Id y name al elemento Texto y Label
	btnDelete.name = "btnDelete"
	btnDelete.value = totText.length+1;
	//btnDelete.onclick = "delDiv("+totText.length+1+")";
	var indice = totText.length+1;
	btnDelete.setAttribute("onclick", "delDiv("+indice+")");
	


	txtdirectr.name = "txtDirector";
	txtdirectr.type = "text";
	txtlegal.name = "txtLegal";
	txtlegal.type = "text";
	//
	labeldirectr.name = "labelDirector";
	labeldirectr.type = "label";
	labellegal.name = "labelLegal";
	labellegal.type = "label";

	divDirect.name ="divDirect";



	//Creo el nodo tipo texto para ser enlasado al elemento texto
	var nodoTexto = document.createTextNode("Director "+(totText.length+1));
	var nodoLabel = document.createTextNode("Director "+(totText.length+1));
	var nodoTextoLegal = document.createTextNode("Legal "+(totText.length+1));
	var nodoLabelLegal = document.createTextNode("Legal "+(totText.length+1));
	var nodoLabelbtnDelete = document.createTextNode("Del");
	//enlaso el nodo texto con el elemento Texto
	txtdirectr.appendChild(nodoTexto);
	labeldirectr.appendChild(nodoLabel);
	txtlegal.appendChild(nodoTextoLegal);
	labellegal.appendChild(nodoLabelLegal);
	btnDelete.appendChild(nodoLabelbtnDelete);

	
	
	txtdirectr.id = "txtDirectors"+(totText.length+1);
	labeldirectr.id = "labeldirectors"+(totText.length+1);
	txtlegal.id = "txtLegals"+(totText.length+1);
	labellegal.id = "labelLegals"+(totText.length+1);
	divDirect.id = "divDirect"+(totText.length+1);
	btnDelete.id = "btnDelete"+(totText.length+1);


	//enlazo el elemento texto al Div del html
	var tabla = document.createElement("table");
	var lineaDirectr = document.createElement("tr");
	var lineaLegal = document.createElement("tr");
	var celdaDirectrLable = document.createElement("td");
	var celdaDirectrText = document.createElement("td")
	var celdaLegalLable = document.createElement("td")
	var celdaLegalText = document.createElement("td")
	var tbody = document.createElement("tbody");

	//divDirect.appendChild(br);
	celdaDirectrLable.appendChild(labeldirectr);
	lineaDirectr.appendChild(celdaDirectrLable);
	celdaDirectrText.appendChild(txtdirectr);
	lineaDirectr.appendChild(celdaDirectrText);

	celdaLegalLable.appendChild(labellegal);
	lineaLegal.appendChild(celdaLegalLable);
	celdaLegalText.appendChild(txtlegal);
	lineaLegal.appendChild(celdaLegalText);

	tbody.appendChild(lineaDirectr);
	tbody.appendChild(lineaLegal);
	tabla.appendChild(tbody);
	divDirect.appendChild(tabla);
/*
	divDirect.appendChild(labeldirectr);
	divDirect.appendChild(txtdirectr);
	divDirect.appendChild(br);
	divDirect.appendChild(labellegal);
	divDirect.appendChild(txtlegal);*/
	divDirect.appendChild(btnDelete);
	divDirect.appendChild(br);
	divDirectors.appendChild(divDirect);

}
else
{
	if (valiDirector.value=="") 
	{
		valiDirector.focus();
	}
	else
	{
		valiLegal.focus();

	};
	valiDirector.focus();
	window.alert("Todos los campos deben de estar llenos para crear uno nuevo");


};
}

function delDiv(id)
{

//window.alert("Borrado");

//optiene el div a borrar
var divDel = document.getElementById("divDirect"+id);
//optenemos el nodo padre
var divDirectors = document.getElementById("divDirectors");

var enableDirector =document.getElementById("txtDirectors"+(id-1));
var enableLegal =document.getElementById("txtLegals"+(id-1));

			//window.alert("Elboton para habilitar es "+ enableBtn.id);

			enableDirector.disabled = false;
			enableLegal.disabled = false;


			if (id >2) 
			{
			//window.alert("Elboton a habilitar es "+ (id-1));
			var enableBtn = document.getElementById("btnDelete"+(id-1));
			enableBtn.disabled = false;
			
		}; 

//borra el div con la referencia del padre
divDirectors.removeChild(divDel);

}

/****************************Creacion de Campos para los contactos******************************************/

function crearCamposContact(){
	

	//Obtengo el Div con el ID Directores para luego ser modificado
	var divContacts = document.getElementById("divContacts");
	
	//obtengo todos los elemento tipo texto y label para luego asignarle un nuevo ID al nuevo elemento 
	var totTxtPositionContact = document.getElementsByName("txtPositionContact");
	var totlabelPositionContact = document.getElementsByName("labelDirector");
	var totdivContact = document.getElementsByName("divContact");
	//Se crea una variable para usarlo de indice para verificar si los campos estan null, si no lo estan se crean los campos dinamicos nuevos
	var valiContact =document.getElementById("txtNameContact"+totTxtPositionContact.length);
	var valiPosition =document.getElementById("txtPositionContact"+totTxtPositionContact.length);
	var valiPhone =document.getElementById("txtPhoneContact"+totTxtPositionContact.length);
	var valiEmail =document.getElementById("txtEmailContact"+totTxtPositionContact.length);
	//window.alert(valiContact+valiPosition+valiPhone+valiEmail);

	if (valiContact.value!="" && valiPosition.value!="" && valiPhone.value!="" && valiEmail.value!="" ) {

			//inavilita el botton borrar y los campos de texto anterior si es el segun Div creado o posterior
			if (totTxtPositionContact.length >=1 ) {
				valiContact.disabled = true;
				valiPosition.disabled = true;
				valiPhone.disabled = true;
				valiEmail.disabled = true;

			};
			if (totTxtPositionContact.length >1) 
			{
					//window.alert("Es el segundo div creado");
					var enableBtn = document.getElementById("btnDeleteContact"+(totTxtPositionContact.length));
					
					enableBtn.disabled = true;
					
				}; 

			//window.alert("hay "+totTxtPositionContact.length+" textos "+" y "+ totLabel.length+" label");
			
			//Creo un elemento tipo Texto y Label
			var txtNameContact = document.createElement("input");
			var labelNameContact = document.createElement("label");
			var txtPositionContact  = document.createElement("input");
			var labelPositionContact  = document.createElement("label");
			//
			var txtPhoneContact = document.createElement("input");
			var labelPhoneContact = document.createElement("label");
			var txtEmailContact  = document.createElement("input");
			var labelEmailContact  = document.createElement("label");
			//




			var divContact = document.createElement("div");
			var btnDeleteContact = document.createElement("button");
			var br = document.createElement("br");


			//Le asigno las propiedades de Id y name al elemento Texto y Label
			btnDeleteContact.name = "btnDeleteContact"
			btnDeleteContact.value = totTxtPositionContact.length+1;
			//btnDeleteContact.onclick = "delDiv("+totTxtPositionContact.length+1+")";
			//le asignamos en el metodo onClick automaticamente el valor a borrar
			var indice = totTxtPositionContact.length+1;
			btnDeleteContact.setAttribute("onclick", "delDivContact("+indice+")");
			


			txtNameContact.name = "txtNameContact";
			txtNameContact.type = "text";
			txtPositionContact.name = "txtPositionContact";
			txtPositionContact.type = "text";
			//
			labelNameContact.name = "labelNameContact";
			labelNameContact.type = "label";
			labelPositionContact.name = "labelPositionContact";
			labelPositionContact.type = "label";
			//
			txtPhoneContact.name = "txtPhoneContact";
			txtPhoneContact.type = "text";
			txtEmailContact.name = "txtEmailContact";
			txtEmailContact.type = "text";
			//
			labelPhoneContact.name = "labelPhoneContact";
			labelPhoneContact.type = "label";
			labelEmailContact.name = "labelEmailContact";
			labelEmailContact.type = "label";
			//
			divDirect.name ="divContact";



			//Creo el nodo tipo texto para ser enlasado al elemento texto
			var nodoTextoNameContact = document.createTextNode("Name Contact"+(totTxtPositionContact.length+1));
			var nodoLabelNameContact = document.createTextNode("Name Contact"+(totTxtPositionContact.length+1));
			var nodoTextoPositionContact = document.createTextNode("Position"+(totTxtPositionContact.length+1));
			var nodoLabelPositionContact = document.createTextNode("Position"+(totTxtPositionContact.length+1));
			var nodoTextoPhonePosition = document.createTextNode("Phone"+(totTxtPositionContact.length+1));
			var nodoLabelPhonePosition = document.createTextNode("Phone"+(totTxtPositionContact.length+1));
			var nodoTextoEmailPosition = document.createTextNode("Email"+(totTxtPositionContact.length+1));
			var nodoLabelEmailPosition = document.createTextNode("Email"+(totTxtPositionContact.length+1));
			var nodoLabelbtnDelete = document.createTextNode("Del");
			
			//enlaso el nodo texto con el elemento Texto
			txtNameContact.appendChild(nodoTextoNameContact);
			labelNameContact.appendChild(nodoLabelNameContact);
			//
			txtPositionContact.appendChild(nodoTextoPositionContact);
			labelPositionContact.appendChild(nodoLabelPositionContact);
			//
			txtPhoneContact.appendChild(nodoTextoPhonePosition);
			labelPhoneContact.appendChild(nodoLabelPhonePosition);
			//
			txtEmailContact.appendChild(nodoTextoEmailPosition);
			labelEmailContact.appendChild(nodoLabelEmailPosition);
			//
			btnDeleteContact.appendChild(nodoLabelbtnDelete);
			//
			
			
			txtNameContact.id = "txtNameContact"+(totTxtPositionContact.length+1);
			labelNameContact.id = "labelNameContact"+(totTxtPositionContact.length+1);
			txtPositionContact.id = "txtPositionContact"+(totTxtPositionContact.length+1);
			labelPositionContact.id = "labelPositionContact"+(totTxtPositionContact.length+1);

			txtPhoneContact.id = "txtPhoneContact"+(totTxtPositionContact.length+1);
			labelPhoneContact.id = "labelPhoneContact"+(totTxtPositionContact.length+1);
			txtEmailContact.id = "txtEmailContact"+(totTxtPositionContact.length+1);
			labelEmailContact.id = "labelEmailContact"+(totTxtPositionContact.length+1);


			divContact.id = "divContact"+(totTxtPositionContact.length+1);
			btnDeleteContact.id = "btnDeleteContact"+(totTxtPositionContact.length+1);
			//se crea la tabla

			var tabla = document.createElement("table");
			var filaname = document.createElement("tr");
			var filaposition = document.createElement("tr");
			var filaphone = document.createElement("tr");
			var filaemail = document.createElement("tr");
			var celdaLableName = document.createElement("td");
			var celdaTextName = document.createElement("td");
			var celdaLabelPosition = document.createElement("td");
			var celdaTextPosition = document.createElement("td");
			var celdaLabelPhone = document.createElement("td");
			var celdaTextPhone = document.createElement("td");
			var celdaLableEmail = document.createElement("td");
			var celdaTextEmail = document.createElement("td");
			var tbody = document.createElement("tbody");



			//enlazo el elemento texto al Div del html
			//divContact.appendChild(br);
			celdaLableName.appendChild(labelNameContact);
			celdaTextName.appendChild(txtNameContact);
			filaname.appendChild(celdaLableName);
			filaname.appendChild(celdaTextName);
			tbody.appendChild(filaname);

			celdaLabelPosition.appendChild(labelPositionContact);
			celdaTextPosition.appendChild(txtPositionContact);
			filaposition.appendChild(celdaLabelPosition);
			filaposition.appendChild(celdaTextPosition);
			tbody.appendChild(filaposition);

			celdaLabelPhone.appendChild(labelPhoneContact);
			celdaTextPhone.appendChild(txtPhoneContact);
			filaphone.appendChild(celdaLabelPhone);
			filaphone.appendChild(celdaTextPhone);
			tbody.appendChild(filaphone);

			celdaLableEmail.appendChild(labelEmailContact);
			celdaTextEmail.appendChild(txtEmailContact);
			filaemail.appendChild(celdaLableEmail);
			filaemail.appendChild(celdaTextEmail);
			tbody.appendChild(filaemail);



			/*divContact.appendChild(labelNameContact);
			divContact.appendChild(txtNameContact);
			divContact.appendChild(labelPositionContact);
			divContact.appendChild(txtPositionContact);
			divContact.appendChild(labelPhoneContact);
			divContact.appendChild(txtPhoneContact);
			divContact.appendChild(labelEmailContact);
			divContact.appendChild(txtEmailContact);*/
			tabla.appendChild(tbody);
			divContact.appendChild(tabla);
			divContact.appendChild(btnDeleteContact);
			//divContact.appendChild(br);
			divContacts.appendChild(divContact);

		}
		else
		{
			
			
			if (valiContact.value=="" )
			{
				window.alert("El campo de contacto debe de estar lleno");
				valiContact.focus();
			}
			else
			{
				if (valiPosition.value=="" )
				{
					window.alert("El campo de posicion debe de estar lleno");
					valiPosition.focus();
				}
				else
				{
					if (valiPhone.value=="" )
					{
						window.alert("El campo de telefono debe de estar lleno");
						valiPhone.focus();
					}
					else
					{
						if (valiEmail.value=="" )
						{
							window.alert("El campo de  Email debe de estar lleno");
							valiEmail.focus();
						}
						else
						{
							window.alert("Todos los campo debe de estar lleno");
						};

					};


				};


			};


			
		};

	};

	function delDivContact(id)
	{

		//window.alert("Borrado");

		//optiene el div a borrar
		var divDelC = document.getElementById("divContact"+id);
		//optenemos el nodo padre
		//window.alert("borrando el"+divDelC.id);
		var divContacts = document.getElementById("divContacts");
		//window.alert("Nodo padre "+divContacts.id);
		var enableContact =document.getElementById("txtNameContact"+(id-1));
		var enablePosition =document.getElementById("txtPositionContact"+(id-1));
		var enablePhone =document.getElementById("txtPhoneContact"+(id-1));
		var enableEmail =document.getElementById("txtEmailContact"+(id-1));
					//window.alert("Elboton para habilitar es "+ enableBtn.id);

					enableContact.disabled = false;
					enablePosition.disabled = false;
					enablePhone.disabled = false;
					enableEmail.disabled = false;

					if (id >2) 
					{

						var enableBtn = document.getElementById("btnDeleteContact"+(id-1));
						enableBtn.disabled = false;

					}; 

		//borra el div con la referencia del padre
		divContacts.removeChild(divDelC);
		//window.alert("Se borro el Div");

	}

	/*******************************************************************************************************************************/


	function validarCampos(formulario)
	{
	//window.alert(formulario);
	var req = document.getElementsByName("required");
	//window.alert("Validando campos "+formulario.id+" hay "+formulario.length+" elementosl");
	var cant = 0;
	var submit = false;
	//window.alert("y Hay "+req.length+" requeridos");
	try
	{

		if (req.length >0) 
		{

		//window.alert("hay campos requeridos");
		for (var i = 0; i < req.length; i++) 
		{
			//window.alert(req[i].value);
			if(req[i].value == "")
			{
				cant++;
				
			};
		};
		//window.alert("hay "+cant+" campos requeridos");
		if (cant>0) 
		{ 
			window.alert("Hay "+cant+" Campos  requeridos");
			submit = false
		}
		else
		{
			
			
			var form;
			//se crea el nuevo formulario
			form = reForm('businessLayer/fromcliente.php');
			//relocate('businessLayer/fromcliente.php');
			form = reDate(form);
			form = reJurisdiction(form);
			form.submit();


			//submit = true;

		};


	};


}
catch(err)
{
	txt="There was an error on this page.\n\n";
	txt+="Error description: " + err.message + "\n\n";
	txt+="Click OK to continue.\n\n";
	alert(txt);
}



return submit;
	//	window.alert(formulario.childNodes);
}


/****************Bloque en donde se recrea el fromulario para luego ser enviado por $_POST*******************/

function reForm(page)
{
	//optiene todos los nodos de tipo input
	var params = document.getElementsByTagName("input");
	//alert(params.length);

	var body = document.body;
	form=document.createElement('form'); 
	form.method = 'POST'; 
	form.action = page;
	form.name = 'jsform';
	
	//se crean los valores de tipo input
	for (var i = 0; i < params.length; i++ ) 
	{
		//alert("re body");
		var input = document.createElement('input');
		input.type='hidden';
		input.name= params[i].id;
		input.id= params[i].id;
		input.value=params[i].value;
		form.appendChild(input);	
	};
	body.appendChild(form);
	
	return form;


}



function reDate(form)
{

		//var selection=document.getElementsByTagName("option");
		var dselection = document.getElementsByName("StartDateDay");
		var mselection = document.getElementsByName("StartDateMonth");
		var yselection = document.getElementsByName("StartDateYear");

		var d = dselection[0].options[dselection[0].selectedIndex].text ;
		var m = mselection[0].options[mselection[0].selectedIndex].value ;
		var y = yselection[0].options[yselection[0].selectedIndex].text ;
			
	// se crea los campos selectionado de fecha como input

	
	var inputDay = document.createElement('input');
	inputDay.type='hidden';
	inputDay.name= "StartDateDay";
	inputDay.id= "StartDateDay";
	inputDay.value=d;
	form.appendChild(inputDay);	


	var inputMonth = document.createElement('input');
	inputMonth.type='hidden';
	inputMonth.name= "StartDateMonth";
	inputMonth.id= "StartDateMonth";
	inputMonth.value=m;
	form.appendChild(inputMonth);
	//alert(m);	

	var inputYear = document.createElement('input');
	inputYear.type='hidden';
	inputYear.name= "StartDateYear";
	inputYear.id= "StartDateYear";
	inputYear.value=y;
	form.appendChild(inputYear);

	return form;
	

}

function reJurisdiction(form)
{

		//var selection=document.getElementsByTagName("option");
		var jselection = document.getElementsByName("jurisdiction");
		

		var j = jselection[0].options[jselection[0].selectedIndex].text ;
		
	// se crea los campos selectionado de fecha como input

	
	var inputJurisdiction = document.createElement('input');
	inputJurisdiction.type='hidden';
	inputJurisdiction.name= "jurisdiction";
	inputJurisdiction.id= "jurisdiction";
	inputJurisdiction.value=j;
	form.appendChild(inputJurisdiction);	

	return form;
	

}

/**************** Fin del Bloque en donde se recrea el fromulario para luego ser enviado por $_POST*****************/


function relocate(page)
{
	
	//optiene todos los nodos de tipo input
	var params = document.getElementsByTagName("input");

	//optiene todos los nodos de tipo selection
	
	//var selection=document.getElementsByTagName("option");
	var dselection = document.getElementsByName("StartDateDay");
	var mselection = document.getElementsByName("StartDateMonth");
	var yselection = document.getElementsByName("StartDateYear");

	
	var d = dselection[0].options[dselection[0].selectedIndex].text ;
	var m = mselection[0].options[mselection[0].selectedIndex].text ;
	var y = yselection[0].options[yselection[0].selectedIndex].text ;
	
	/*
	var sum ="";
	for (var i = 0 ; i < selection.length ;i++) 
	{
		sum = sum+selection[i].text+" ";
	};

	*/

	//window.alert("En Relocate");
	var body = document.body;
	form=document.createElement('form'); 
	form.method = 'POST'; 
	form.action = page;
	form.name = 'jsform';
	
	//se crean los valores de tipo input
	for (var i = 0; i < params.length; i++ ) 

	{
		var input = document.createElement('input');
		input.type='hidden';
		input.name= params[i].id;
		input.id= params[i].id;
		input.value=params[i].value;
		form.appendChild(input);	
	};
	// se crea los campos selectionado de fecha como input

	
	var inputDay = document.createElement('input');
	input.type='hidden';
	input.name= "StartDateDay";
	input.id= "StartDateDay";
	input.value=d;
	form.appendChild(inputDay);	

	var inputMonth = document.createElement('input');
	input.type='hidden';
	input.name= "StartDateMonth";
	input.id= "StartDateMonth";
	input.value=m;
	form.appendChild(inputMonth);	

	var inputYear = document.createElement('input');
	input.type='hidden';
	input.name= "StartDateYear";
	input.id= "StartDateYear";
	input.value=y;
	form.appendChild(inputYear);	

	body.appendChild(form);
	form.submit();
}



