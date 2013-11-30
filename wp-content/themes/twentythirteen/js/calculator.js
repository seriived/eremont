oldwood3 = new Array(13000,5000,4000); // Ѕизнес (работы, расходные материалы, отделочные материалы)
oldwood4 = new Array(14000,5600,4400); // Ёлит
oldwood5 = new Array(16000,5800,5800); // Ёксклюзив

oldiron3 = new Array(10000,4000,4000);
oldiron4 = new Array(11500,4500,4400);
oldiron5 = new Array(13000,5000,5800);

monolit3 = new Array(9000,3800,4000);
monolit4 = new Array(11000,4200,4400);
monolit5 = new Array(13000,4600,5800);

function raschet(var_type_1,var_type_2)
{
	if (var_type_1 != '' && var_type_1 !== undefined)
	{
		_gaq.push(['_trackEvent', ' алькул€тор ремонта',var_type_1,var_type_2]);
	}
	
	dom = document.getElementById('select1').value;
	ko = document.getElementById('select2').value; // квартира, офис, коттедж, таунхаус
	star = document.getElementById('select3').value; // бизнес, элит, эксклюзив
	metr = document.getElementById('textfield').value;
	
	if (dom == 1)
	{
		if (star == 3)
		{
			price1 = oldwood3[0];
			price2 = oldwood3[1];

			if (ko == 1)
			{
				price1 = oldwood3[0]+500;
			}

			if (ko == 2)
			{
				price2 = oldwood3[1]+600;
			}

			if (ko == 4)
			{
				price1 = oldwood3[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = oldwood3[2]*metr;
		}

		if (star == 4)
		{
			price1 = oldwood4[0];
			price2 = oldwood4[1];

			if (ko == 1)
			{
				price1 = oldwood4[0]+500;
			}

			if (ko == 2)
			{
				price2 = oldwood4[1]+600;
			}

			if (ko == 4)
			{
				price1 = oldwood4[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = oldwood4[2]*metr;
		}

		if (star == 5)
		{
			price1 = oldwood5[0];
			price2 = oldwood5[1];

			if (ko == 1)
			{
				price1 = oldwood5[0]+500;
			}

			if (ko == 2)
			{
				price2 = oldwood5[1]+600;
			}

			if (ko == 4)
			{
				price1 = oldwood5[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = oldwood5[2]*metr;
		}
	}

	if (dom == 2)
	{
		if (star == 3)
		{
			price1 = oldiron3[0];
			price2 = oldiron3[1];

			if (ko == 1)
			{
				price1 = oldiron3[0]+500;
			}

			if (ko == 2)
			{
				price2 = oldiron3[1]+600;
			}

			if (ko == 4)
			{
				price1 = oldiron3[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = oldiron3[2]*metr;
		}

		if (star == 4)
		{
			price1 = oldiron4[0];
			price2 = oldiron4[1];

			if (ko == 1)
			{
				price1 = oldiron4[0]+500;
			}

			if (ko == 2)
			{
				price2 = oldiron4[1]+600;
			}

			if (ko == 4)
			{
				price1 = oldiron4[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = oldiron4[2]*metr;
		}

		if (star == 5)
		{
			price1 = oldiron5[0];
			price2 = oldiron5[1];

			if (ko == 1)
			{
				price1 = oldiron5[0]+500;
			}

			if (ko == 2)
			{
				price2 = oldiron5[1]+600;
			}

			if (ko == 4)
			{
				price1 = oldiron5[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = oldiron5[2]*metr;
		}
	}

	if (dom == 3)
	{
		if (star == 3)
		{
			price1 = monolit3[0];
			price2 = monolit3[1];

			if (ko == 1)
			{
				price1 = monolit3[0]+500;
			}

			if (ko == 2)
			{
				price2 = monolit3[1]+600;
			}

			if (ko == 4)
			{
				price1 = monolit3[0]+200;	
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = monolit3[2]*metr;
		}

		if (star == 4)
		{
			price1 = monolit4[0];
			price2 = monolit4[1];
			
			if (ko == 1)
			{
				price1 = monolit4[0]+500;
			}

			if (ko == 2)
			{
				price2 = monolit4[1]+600;
			}

			if (ko == 4)
			{
				price1 = monolit4[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = monolit4[2]*metr;
		}

		if (star == 5)
		{
			price1 = monolit5[0];
			price2 = monolit5[1];

			if (ko == 1)
			{
				price1 = monolit5[0]+500;
			}

			if (ko == 2)
			{
				price2 = monolit5[1]+600;
			}

			if (ko == 4)
			{
				price1 = monolit5[0]+200;
			}

			znach1 = price1*metr;
			znach2 = price2*metr;
			znach3 = monolit5[2]*metr;
		}
	}

	znach1 = znach1/1000;
	znach2 = znach2/1000;
	znach3 = znach3/1000;

	znach=znach1+znach2+znach3;

	document.getElementById('res1').innerHTML=znach1.toFixed(1).replace(".",",");
	document.getElementById('res2').innerHTML=znach2.toFixed(1).replace(".",",");
	document.getElementById('res12').innerHTML=(znach1+znach2).toFixed(1).replace(".",",");
	document.getElementById('res3').innerHTML=znach3.toFixed(1).replace(".",",");
	document.getElementById('res').innerHTML=znach.toFixed(1).replace(".",",");
}