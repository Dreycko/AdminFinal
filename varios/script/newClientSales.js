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



	
	

	//alert();

}		


