ajax = new XMLHttpRequest();

function seleccionarCasilla(casilla)
{
	casilla.value = "X";
	casilla.innerHTML = "X";
	casilla.style.color = "blue";
	casilla.disabled = true;

	SI = document.getElementById('casillaSI');
	SC = document.getElementById('casillaSC');
	SD = document.getElementById('casillaSD');
	CI = document.getElementById('casillaCI');
	CC = document.getElementById('casillaCC');
	CD = document.getElementById('casillaCD');
	II = document.getElementById('casillaII');
	IC = document.getElementById('casillaIC');
	ID = document.getElementById('casillaID');

	if(SI.value=="X"&&SC.value=="X"&&SD.value=="X" || CI.value=="X"&&CC.value=="X"&&CD.value=="X" || II.value=="X"&&IC.value=="X"&&ID.value=="X" || SI.value=="X"&&CI.value=="X"&&II.value=="X" || SC.value=="X"&&CC.value=="X"&&IC.value=="X" || SD.value=="X"&&CD.value=="X"&&ID.value=="X" || SI.value=="X"&&CC.value=="X"&&ID.value=="X" || SD.value=="X"&&CC.value=="X"&&II.value=="X")
	{
		notificacion("Ganaste!");
		document.getElementById('casillaSI').disabled = true;
		document.getElementById('casillaSC').disabled = true;
		document.getElementById('casillaSD').disabled = true;
		document.getElementById('casillaCI').disabled = true;
		document.getElementById('casillaCC').disabled = true;
		document.getElementById('casillaCD').disabled = true;
		document.getElementById('casillaII').disabled = true;
		document.getElementById('casillaIC').disabled = true;
		document.getElementById('casillaID').disabled = true;
	}
	else
	{

		document.getElementById('cargando').style.display = "block";

		dificultad = document.getElementById('dificultad').value;

		ajax.open('GET', 'brain/'+dificultad+'.php?si='+SI.value+'&sc='+SC.value+'&sd='+SD.value+'&ci='+CI.value+'&cc='+CC.value+'&cd='+CD.value+'&ii='+II.value+'&ic='+IC.value+'&id='+ID.value);
		ajax.send();
		ajax.onreadystatechange = function()
		{
			if(ajax.readyState == 4)
			{
				document.getElementById('cargando').style.display = "none";

				if(ajax.status == 200)
				{
					//notificacion(ajax.responseText);
					switch(ajax.responseText)
					{
						case "si":
							SI.value = "O";
							SI.innerHTML = "O";
							SI.style.color = "red";
							SI.disabled = true;
						break;

						case "sc":
							SC.value = "O";
							SC.innerHTML = "O";
							SC.style.color = "red";
							SC.disabled = true;
						break;

						case "sd":
							SD.value = "O";
							SD.innerHTML = "O";
							SD.style.color = "red";
							SD.disabled = true;
						break;

						case "ci":
							CI.value = "O";
							CI.innerHTML = "O";
							CI.style.color = "red";
							CI.disabled = true;
						break;

						case "cc":
							CC.value = "O";
							CC.innerHTML = "O";
							CC.style.color = "red";
							CC.disabled = true;
						break;

						case "cd":
							CD.value = "O";
							CD.innerHTML = "O";
							CD.style.color = "red";
							CD.disabled = true;
						break;

						case "ii":
							II.value = "O";
							II.innerHTML = "O";
							II.style.color = "red";
							II.disabled = true;
						break;

						case "ic":
							IC.value = "O";
							IC.innerHTML = "O";
							IC.style.color = "red";
							IC.disabled = true;
						break;

						case "id":
							ID.value = "O";
							ID.innerHTML = "O";
							ID.style.color = "red";
							ID.disabled = true;
						break;

						case "0":
							notificacion("Empate");
						break;

						default:
							notificacion("Ocurrio un error inesperado.\nLamentamos las molestias.\n"+ajax.responseText);
						break;
					}

					if(SI.value=="O"&&SC.value=="O"&&SD.value=="O" || CI.value=="O"&&CC.value=="O"&&CD.value=="O" || II.value=="O"&&IC.value=="O"&&ID.value=="O" || SI.value=="O"&&CI.value=="O"&&II.value=="O" || SC.value=="O"&&CC.value=="O"&&IC.value=="O" || SD.value=="O"&&CD.value=="O"&&ID.value=="O" || SI.value=="O"&&CC.value=="O"&&ID.value=="O" || SD.value=="O"&&CC.value=="O"&&II.value=="O")
					{
						notificacion("Perdiste");
						document.getElementById('casillaSI').disabled = true;
						document.getElementById('casillaSC').disabled = true;
						document.getElementById('casillaSD').disabled = true;
						document.getElementById('casillaCI').disabled = true;
						document.getElementById('casillaCC').disabled = true;
						document.getElementById('casillaCD').disabled = true;
						document.getElementById('casillaII').disabled = true;
						document.getElementById('casillaIC').disabled = true;
						document.getElementById('casillaID').disabled = true;
					}

				}
				else
				{
					notificacion("Error con el servidor.");
				}
			}
		}
	}
}

function reiniciar()
{
	SI = document.getElementById('casillaSI');
	SC = document.getElementById('casillaSC');
	SD = document.getElementById('casillaSD');
	CI = document.getElementById('casillaCI');
	CC = document.getElementById('casillaCC');
	CD = document.getElementById('casillaCD');
	II = document.getElementById('casillaII');
	IC = document.getElementById('casillaIC');
	ID = document.getElementById('casillaID');

	SI.value = "";
	SI.innerHTML = "X";
	SI.style.color = "transparent";
	SI.disabled = false;

	SC.value = "";
	SC.innerHTML = "X";
	SC.style.color = "transparent";
	SC.disabled = false;

	SD.value = "";
	SD.innerHTML = "X";
	SD.style.color = "transparent";
	SD.disabled = false;

	CI.value = "";
	CI.innerHTML = "X";
	CI.style.color = "transparent";
	CI.disabled = false;

	CC.value = "";
	CC.innerHTML = "X";
	CC.style.color = "transparent";
	CC.disabled = false;

	CD.value = "";
	CD.innerHTML = "X";
	CD.style.color = "transparent";
	CD.disabled = false;

	II.value = "";
	II.innerHTML = "X";
	II.style.color = "transparent";
	II.disabled = false;

	IC.value = "";
	IC.innerHTML = "X";
	IC.style.color = "transparent";
	IC.disabled = false;

	ID.value = "";
	ID.innerHTML = "X";
	ID.style.color = "transparent";
	ID.disabled = false;

	not = document.getElementById("notificacion").style.top = "-10%";
}

function mostrarTemas()
{
	document.getElementById('cargando').style.display = "block";
	document.getElementById("temas").style.display = "block";
}

function seleccionarTema(theme)
{
	eliminarTema();

	if(theme==null)
	{
		tema = localStorage.getItem("tema");
		if(tema == null)
		{
			theme = "blue";
		}
		else
		{
			theme = tema;
		}
	}

	switch(theme)
	{
		case "blue":
			document.getElementById('body').classList.add("bgBlue");
			document.getElementById('titulo').classList.add("grBlue");
			document.getElementById('notificacion').classList.add("grBlue");
			localStorage.setItem("tema", "blue");
		break;

		case "red":
			document.getElementById('body').classList.add("bgRed");
			document.getElementById('titulo').classList.add("grRed");
			document.getElementById('notificacion').classList.add("grRed");
			localStorage.setItem("tema", "red");
		break;

		case "grey":
			document.getElementById('body').classList.add("bgGrey");
			document.getElementById('titulo').classList.add("grGrey");
			document.getElementById('notificacion').classList.add("grGrey");
			localStorage.setItem("tema", "grey");
		break;
	}

	document.getElementById('cargando').style.display = "none";
	document.getElementById("temas").style.display="none";
}

function cerrarTemas()
{
	document.getElementById('cargando').style.display = "none";
	document.getElementById("temas").style.display="none";
}

function eliminarTema()
{
	document.getElementById('body').classList.remove("bgBlue", "bgGrey", "bgRed");
	document.getElementById('titulo').classList.remove("grBlue", "grGrey", "grRed");
	document.getElementById('notificacion').classList.remove("grBlue", "grGrey", "grRed");
}

function notificacion(texto)
{
	not = document.getElementById("notificacion");
	not.style.top = "2%";
	not.innerHTML = "<p>"+texto+"</p>";
	setTimeout(function()
	{
		not.style.top = "-10%";
	}, 3000);
}