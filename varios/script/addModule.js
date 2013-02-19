function load (option,name,phone,email)
{

	
	switch(option)
	{
		case "l":
		//Esta opcion se realizara cuando de crea el cleinte y se le queire adicionar automaticamente los lodulos
		window.location=("businessLayer/addModule.php?op=l");
		break;

		case "s":
		//Esta opcion se efectua cuando se absede desde el menu para buscar un cliente y adicionarle los modulos

		divBuscar ();

		break;
		case "c":
		//esta opcion se efectua cuando del servidor se regresa la informacion ya sea de aberla buscado o cargado automaticamente
		break;

		case "r":
		divLoad (name,phone,email);
		divBuscar ();
		break;

		
	}	

}

function divLoad (name,phone,email)
{
	
	//var test = {$test};

	//alert(test);
	var divClientLoad = document.getElementById("clientLoad")
		// se crean los botones de busqueda en el div de client de addModule.tpl
		//optenemos el nodo client
		//creamos el label el input y el boton par ala busqueda de 
		//label
		var	divName = document.createElement("div");
		var	divEmail = document.createElement("div");
		var	divPhone = document.createElement("div");


		var	labelName	= document.createElement("label");
		var	labelNameText = document.createElement("label");
		labelName.appendChild(document.createTextNode("Name:"));
		labelNameText.appendChild(document.createTextNode(name));
		divName.appendChild(labelName);
		divName.appendChild(labelNameText);

		var	labelEmail	= document.createElement("label");
		var	labelEmailText = document.createElement("label");
		labelEmail.appendChild(document.createTextNode("Email:"));
		labelEmailText.appendChild(document.createTextNode(email));
		divEmail.appendChild(labelEmail);
		divEmail.appendChild(labelEmailText);

		var	labelPhone	= document.createElement("label");
		var	labelPhoneText = document.createElement("label");
		labelPhone.appendChild(document.createTextNode("Phone:"));
		labelPhoneText.appendChild(document.createTextNode(phone));
		divPhone.appendChild(labelPhone);
		divPhone.appendChild(labelPhoneText);

		divClientLoad.appendChild(divName);
		divClientLoad.appendChild(divEmail);
		divClientLoad.appendChild(divPhone);
	}


	function divBuscar ()
	{

	//var test = {$test};

	//alert(test);
	var divClient = document.getElementById("client")
		// se crean los botones de busqueda en el div de client de addModule.tpl
		//optenemos el nodo client
		//creamos el label el input y el boton par ala busqueda de 
		//label
		var	labelBuscar	= document.createElement("label");
		labelBuscar.appendChild(document.createTextNode("Cliente a Buscar"));
		//input
		var	textBuscar = document.createElement("input");
		textBuscar.name	="textBuscar"; 
		//boton
		var	buttonBuscar = document.createElement("button");
		buttonBuscar.appendChild(document.createTextNode("Buscar"));
		buttonBuscar.value ="buscar";
		buttonBuscar.type = "submit";
		buttonBuscar.setAttribute("onclick", "this.form.action = 'businessLayer/addModule.php?op=l'");

/*
		<input type="submit" onclick = "this.form.action = 'businessLayer/addModule.php'" value="accion 1" />
      <input type="submit" onclick = "this.form.action = 'pagina2.php'" value="accion 2" />
      */
      divClient.appendChild(labelBuscar);
      divClient.appendChild(textBuscar);
      divClient.appendChild(buttonBuscar);


  }