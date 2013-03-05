

function message(option, page,type,entity)
{
	


	if (option=="open") 
	{
		

		//Se optiene el div que contiene el mensaje
		var msgBox = document.getElementById("msg-box")	
		//se crean los tres div que contendran la informacion a mostrar
		var divTitulo = document.createElement("div");
		var divMsg = document.createElement("div");
		var divButton = document.createElement("div");

		//Se crea el elemento que contendra el titulo del mensage
		var center = document.createElement("center");
		var	h2Titulo = document.createElement("h2");
			//Se crea el elemento que contendra el  mensage
			var pMessage = document.createElement("p");
			var	pButton = document.createElement("p");



			if (type == "1")
			{


				var h2TituloText = document.createTextNode("Creacion Correcta");
				h2Titulo.appendChild(h2TituloText);


				var pMessageText = document.createTextNode("El cliente "+entity+" se a creado correctamente");
				pMessage.appendChild(pMessageText);


			//Se crea los dos botones para ("Crear un nuevo cliente o adicionar al ya exsitente los modulos correspondiente  ")
			var buttonAdd = document.createElement("button");	
			var buttonNew = document.createElement("button");
			// se le asigna los valores de nombre a los botones
			buttonNew.name = "buttonNew";
			buttonAdd.name = "buttonAdd";
			// se le asigna los nombre que se le mostrara a los clientes
			buttonNew.value = "New Entity";
			buttonAdd.value = "Add Module";
			// se crea el evento de de los botones
			buttonNew.setAttribute("onclick", "redireccionar('newClient')");
			buttonAdd.setAttribute("onclick", "redireccionar('addModule')");
			//se crea el texto del botton

			var buttonLabelNew = document.createTextNode("New Entity");
			var buttonLabelAdd = document.createTextNode("Add Module");

			buttonNew.appendChild(buttonLabelNew);
			buttonAdd.appendChild(buttonLabelAdd);


			
			divButton.appendChild(buttonNew);
			divButton.appendChild(buttonAdd);

			

			//center.appendChild(msgBox);

		}
		else if(type =="newClientSales")
		{
			var h2TituloText = document.createTextNode("Creacion Correcta");
				h2Titulo.appendChild(h2TituloText);


				var pMessageText = document.createTextNode("El cliente "+entity+" se a creado correctamente");
				pMessage.appendChild(pMessageText);


			//Se crea los dos botones para ("Crear un nuevo cliente o adicionar al ya exsitente los modulos correspondiente  ")
			var buttonAdd = document.createElement("button");	
			var buttonNew = document.createElement("button");
			// se le asigna los valores de nombre a los botones
			buttonNew.name = "buttonNew";
			buttonAdd.name = "buttonAdd";
			// se le asigna los nombre que se le mostrara a los clientes
			buttonNew.value = "New Entity";
			buttonAdd.value = "Add Module";
			// se crea el evento de de los botones
			buttonNew.setAttribute("onclick", "redireccionar('newClientSales')");
			buttonAdd.setAttribute("onclick", "redireccionar('newClientSales2')");
			//se crea el texto del botton

			var buttonLabelNew = document.createTextNode("New Entity");
			var buttonLabelAdd = document.createTextNode("Add KYC");

			buttonNew.appendChild(buttonLabelNew);
			buttonAdd.appendChild(buttonLabelAdd);


			
			divButton.appendChild(buttonNew);
			divButton.appendChild(buttonAdd);


		}
		else if(type == "searchModule")
		{
			

			var h2TituloText = document.createTextNode("Cliente no encontrado");
			h2Titulo.appendChild(h2TituloText);


			var pMessageText = document.createTextNode("El cliente "+entity+" no se a encontrado");
			pMessage.appendChild(pMessageText);

			//Se crea los dos botones para ("Crear un nuevo cliente o adicionar al ya exsitente los modulos correspondiente  ")
			var buttonSearch = document.createElement("button");	
			var buttonNew = document.createElement("button");
			// se le asigna los valores de nombre a los botones
			buttonNew.name = "buttonNew";
			buttonSearch.name = "buttonSearch";
			// se le asigna los nombre que se le mostrara a los clientes
			buttonNew.value = "New Entity";
			buttonSearch.value = "Search Entity";
			// se crea el evento de de los botones
			buttonNew.setAttribute("onclick", "redireccionar('newClient')");
			buttonSearch.setAttribute("onclick", "redireccionarAddModule('addModule')");
			//se crea el texto del botton

			var buttonLabelNew = document.createTextNode("New Entity");
			var buttonLabelAdd = document.createTextNode("Search Entity");

			buttonNew.appendChild(buttonLabelNew);
			buttonSearch.appendChild(buttonLabelAdd);


			
			divButton.appendChild(buttonNew);
			divButton.appendChild(buttonSearch);

		};

		msgBox.appendChild(divTitulo);
		msgBox.appendChild(divMsg);
		msgBox.appendChild(divButton);
		divTitulo.appendChild(h2Titulo);
		divMsg.appendChild(pMessage);
		$("#main-box, #msg-box").fadeIn(1000);



	} 
	
	else
	{
		$("#main-box, #msg-box").fadeOut(1000);
		window.location=(page+".php");

	};



}

function redireccionar(page)
{

	window.alert(page);
	var body = document.body;
	form=document.createElement('form'); 
	form.method = 'POST'; 
	form.action = "index.php?menu="+page;
	form.name = 'jsform';
	body.appendChild(form);
	form.submit();
}

function redireccionarAddModule(entity)
{

	window.alert(page);
	var body = document.body;
	form=document.createElement('form'); 
	form.method = 'POST'; 
	form.action = "index.php?menu=addModule&textBuscar="+entity;
	form.name = 'jsform';
	body.appendChild(form);
	form.submit();
}
