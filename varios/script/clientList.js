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
			
			var btn = document.createElement("button");
			btn.name = (pagina+i);
			btn.appendChild(document.createTextNode(pagina+i));
			btn.setAttribute("onClick"," paginar("+(pagina+i)+");")
			btn.setAttribute("style","width: 30px; margin:2px");
			cel.appendChild(btn);

		}

	} 
	else if (pagina >0 && pagina <4)
	{
		for(i = 0; i <10; i++)
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

	btnnex.setAttribute("onClick","paginar("+(pagina+1)+");");
	var fin = (rowTot/10).toFixed(0)-1;
	//alert(fin);
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
		
		row[i].removeAttribute("style");
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
	if (resp)
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

