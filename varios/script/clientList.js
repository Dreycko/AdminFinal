function pag(pagina)
{

	//pagina = 1;
	var	ini = pagina*10;
	if (pagina ===0) 
	{
		var fin = 10;
	}
	else
	{
		var fin= ini+9;	
	};
	
	mostrar(ini,fin,pagina);


	

}
function food(pagina)
{
	
	var	table = document.getElementById("active");
	var row = table.getElementsByTagName('tr')
	var rowTot = (row.length)-4;
	var tfoot = document.createElement("tfoot");
	tfoot.id = "tfoot";	
	var row = document.createElement("tr");
	var cel = document.createElement("td");
	var	btnini = document.createElement("button");
	var	btnfin =document.createElement("button");
	var	btnnex =document.createElement("button");
	var	btnfpre= document.createElement("button");
	var go = document.createElement("button");
	var goText = document.createElement("input");
	goText.id = "goText";

	go.appendChild(document.createTextNode("GO"));
	go.setAttribute("onClick","go();")

	btnini.appendChild(document.createTextNode("<<"));
	btnfin.appendChild(document.createTextNode(">>"));
	
	btnfpre.appendChild(document.createTextNode("<"));
	btnnex.appendChild(document.createTextNode(">"));


	btnfpre.setAttribute("onClick","paginar("+(pagina-1)+");");
	btnini.setAttribute("onClick","paginar(0);");

	if (pagina ===0) 
	{
		btnfpre.disabled ="true";
		btnini.disabled ="true";
	};
	cel.appendChild(btnini);
	cel.appendChild(btnfpre);

	if (pagina ===0) 
	{
		
		for(i = 0; i <10; i++)
		{
			if (i <= (rowTot/10).toFixed(0))
				{var btn = document.createElement("button");
			btn.name = (pagina+i);
			btn.appendChild(document.createTextNode(pagina+i));
			btn.setAttribute("onClick"," paginar("+(pagina+i)+");")
			btn.setAttribute("style","width: 30px; margin:2px");
			cel.appendChild(btn);
		};

	}


} 
else if (pagina >0 && pagina <4)
{

	
	for(i = 0; i <10; i++)
	{
		if (i <= (rowTot/10).toFixed(0))
		{
			var btn = document.createElement("button");
			btn.name = (pagina+i-pagina);
			btn.appendChild(document.createTextNode(pagina+i-pagina));
			btn.setAttribute("onClick"," paginar("+(pagina+i-pagina)+");")
			btn.setAttribute("style","width: 30px; margin:2px");
			if (i === pagina)
			{
				btn.setAttribute("style","background-color:lightblue; width: 30px; margin:2px");
				//btn.style=("background-color:lightgreen");
				//alert("el Boton:"+i+" Tiene Hober")


			};
			if (i<10) 
			{
				//btn.setAttribute("style","width: 30px; margin:2px");
				if (i === pagina)
				{
					btn.setAttribute("style","background-color:lightblue; width: 30px; margin:2px");
				//btn.style=("background-color:lightgreen");
				//alert("el Boton:"+i+" Tiene Hober")


			};

		};


		cel.appendChild(btn);

	};
}


}
else
{
	for(i = 0; i <10; i++)
	{
		//alert((rowTot/10).toFixed(0));
		if ((pagina+i-4) <= (rowTot/10).toFixed(0))
		{
			var btn = document.createElement("button");
			btn.name = (pagina+i-4);
			btn.appendChild(document.createTextNode(pagina+i-4));
			btn.setAttribute("onClick"," paginar("+(pagina+i-4)+");")
			btn.setAttribute("style","width: 30px; margin:2px");

			if (pagina === (pagina+i-4))
			{
				btn.setAttribute("style","background-color:lightblue");


			};
			if ((pagina+i-4)<10) 
			{
				if (pagina === (pagina+i-4))
				{
					btn.setAttribute("style","background-color:lightblue;width: 30px; margin:2px");
				};
			};


			cel.appendChild(btn);
		};

	}

};
	//alert(cel.childNodes[9].getAttribute("width"));
	var fin = (rowTot/10).toFixed(0);
	//alert(fin);
	var indiceNex;
	if (pagina <= fin) {indiceNex =pagina+1;} else{indiceNex =pagina;};
	btnnex.setAttribute("onClick","paginar("+indiceNex+");"); 
	btnfin.setAttribute("onClick","paginar("+fin+");");
	cel.appendChild(btnnex);
	cel.appendChild(btnfin);
	cel.appendChild(go);
	cel.appendChild(goText);
	cel.setAttribute("colspan", "11");
	row.appendChild(cel);
	tfoot.appendChild(row);
	var tfootBorrar = document.getElementById("tfoot");
	if (tfootBorrar) 
	{
		table.removeChild(tfootBorrar);

	};

	table.appendChild(tfoot);

}

function mostrar(ini,fin,pagina)
{
	var	table = document.getElementById("active");
	var row = table.getElementsByTagName('tr')
	var rowTot = (row.length)-4;
	if (pagina===0)
	{
		ini = ini+2;
		fin = 10;

	}

	else
	{
		ini = pagina *10;
		fin = pagina *10 + 9;
	}
	;

	for (var j =0; j <= rowTot; j++)
	{
		if (j >1) 
		{
			row[j].style.display = "none";

		};
		
	};

	for (var i =ini; i <= fin; i++)
	{
		if (row[i]) {
			row[i].removeAttribute("style");
		};
	};

	food(pagina);

}
function paginar(pagina)
{

	
	mostrar(0,0,pagina);
}
function go ()
{

	var go = document.getElementById("goText");
	var resp =isNumber(go.value);
	var totButton = document.getElementsByTagName("button");
	//alert(totButton.length-5);

	if (resp && go.value <=(totButton.length-6) )
	{
		paginar(parseInt(go.value));
		//food(go.value);
	}
	else
	{
		alert("Introdusca una fila correcta");
		go.value = "";
		go.focus();

	};
	

}

function isNumber(n) {
	return !isNaN(parseFloat(n)) && isFinite(n);
}
function actualizarIT(idrow)
{
	alert("IT");

}
function actualizarVentas(idrow)
{
	
		var row = document.getElementById(idrow);
		var	labels = row.getElementsByTagName("label");
		var divForm = document.getElementById("form");
		var inputForm = divForm.getElementsByTagName("input");
		
		for (var i = 0; i < labels.length; i++) 
		{
			
			inputForm[i].value =labels[i].innerHTML;

		};

		$("#main-box, #form").fadeIn(500);

	}

	function exit()
	{
		$("#main-box, #form").fadeOut(500);
		return false;
	}

	function saveForm()
	{


		
		var btns = document.getElementsByTagName("button");
		var btnseleted = "";
		//alert(btns.length);
		for (var i = 0; i < btns.length; i++) 
		{
			//alert(btns[i].getAttribute("style"));
			if(/background-color:lightblue/.test(btns[i].getAttribute("style")))
			{
				btnseleted = btns[i].name;
			};
		};
		if (btnseleted =="")
		{
			btnseleted ="0";
		};
		var	input = document.createElement("input");
		input.name="btnseleted";
		input.value = btnseleted;
		formSave.appendChild(input);
		//alert("test");
		$("#main-box, #form").fadeOut(500);
		document.formSave.submit();

		
		//return false;

	}

	function overin(row)
	{
		//alert(row);
		//row.setAttribute("bgcolor", "#FF0000")

	}
	function overout(row)
	{

	}
