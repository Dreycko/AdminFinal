function load()
{
	//alert("Load");

	var	inputs = document.getElementsByTagName("input");
	var	selects = document.getElementsByTagName("select")


	for (var j =0; j < selects.length ; j++)
	{
		
		if (selects[j].name =="jurisdiction") 
		{
			selects[j].disabled = true;
		};


		
	};

	for (var i =0; i < inputs.length ; i++)
	{
		
		if (inputs[i].name == "btnSales" || inputs[i].name == "contact_sale" || inputs[i].name == "dop" || inputs[i].name == "code" || inputs[i].name == "company_name" || inputs[i].name == "contact" || inputs[i].name == "hosting" || inputs[i].name == "domain"  )
		{
			inputs[i].disabled = false;
		};
		
	};

}

function validar(div)
{
	
	var div	= document.getElementById("Sales");
	var input = div.getElementsByTagName("input");
	var select = div.getElementsByTagName("select");


	
	if (input[0].name == "code" &&  input[0].value =="")
	{
		alert("El campo code es requerido");
		input[0].focus();

	}
	else if(input[0].value.length!= 3)
	{
		alert("El campo code debe de ser tres caracteres");
		input[0].focus();
	}
	else if(input[1].name == "company_name" &&  input[1].value =="") 
	{
		alert("El campo company name es requerido");
		input[1].focus();
	}
	else
	{
		
		// se crea el formulario
		var form = document.createElement("form");
		//se agraga la forma de mandar la informacion
		form.method="post";
		form.action="businessLayer/newClientSales.php";
		for (var i=0 ; i < input.length; i++)
		{
			
			var dato = document.createElement("input");
			dato.setAttribute("name",input[i].name);
			dato.setAttribute("value", input[i].value);
			//alert(input);
			form.appendChild(dato);
		};

		for (var j=0 ; j < select.length; j++)
		{
			var index = select[j].selectedIndex
			var datoSelect = document.createElement("input");
			datoSelect.setAttribute("name",select[j].name);
			datoSelect.setAttribute("value", select[j][index].value);
			form.appendChild(datoSelect);

		};


		form.submit();
		
	};
	

}


function habilitar(form)
{
	var	legend = document.getElementById("legend"+form);
	var tot = legend.innerHTML.length;
	var text = legend.innerHTML.substring(16,tot)
	var	div = document.getElementById("forms"+form);
	var input = div.getElementsByTagName("input")
	var select = div.getElementsByTagName("select")

	legend.innerHTML = text;

	for (var i =0 ; i < input.length ; i++ )
	{
		//alert(input[i]);
		input[i].disabled = false;

	};


}		


