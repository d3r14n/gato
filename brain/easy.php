<?php

	$si = $_GET['si'];
	$sc = $_GET['sc'];
	$sd = $_GET['sd'];
	$ci = $_GET['ci'];
	$cc = $_GET['cc'];
	$cd = $_GET['cd'];
	$ii = $_GET['ii'];
	$ic = $_GET['ic'];
	$id = $_GET['id'];

	if($si!=""&&$sc!=""&&$sd!=""&&$ci!=""&&$cd!=""&&$ii!=""&&$ic!=""&&$id!="")
	{
		echo "0";
	}
	else
	{
		seleccionarCasilla:
			$casilla = rand(1, 9);
			switch($casilla)
			{
				case 1:
					if($si=="")
					{
						echo "si";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 2:
					if($sc=="")
					{
						echo "sc";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 3:
					if($sd=="")
					{
						echo "sd";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 4:
					if($ci=="")
					{
						echo "ci";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 5:
					if($cc=="")
					{
						echo "cc";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 6:
					if($cd=="")
					{
						echo "cd";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 7:
					if($ii=="")
					{
						echo "ii";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 8:
					if($ic=="")
					{
						echo "ic";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
				case 9:
					if($id=="")
					{
						echo "id";
					}
					else
					{
						goto seleccionarCasilla;
					}
				break;
			}
	}

?>