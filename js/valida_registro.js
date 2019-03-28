with(document.registro)
{
	onsubmit = function(e)
	{
		e.preventDefault();
		ok = true;

		//valores de la linea 1

		if(ok && cc.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			cc.focus();
		}
		if(ok &&nombre.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			nombre.focus();
		}
		if(ok && apellido.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			apellido.focus();
		}

		//valores de la linea 2

		if(ok && username.value==""){
			ok=false;
			alert("Todos los datos son necesarios");
			username.focus();
		}
		if(ok &&tel.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			tel.focus();
		}
		if(ok && ciudad.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			ciudad.focus();
		}

		//valores de la linea 3

		if(ok &&dir.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			dir.focus();
		}
		if(ok && cargo.value=="")
		{
			ok=false;
			alert("Todos los datos son necesarios");
			cargo.focus();
		}
		
		//valores de la linea 4

		if(ok && password.value==""){
			ok=false;
			alert("Todos los datos son necesarios");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Todos los datos son necesarios");
			confirm_password.focus();
		}
		if(ok && password.value!= confirm_password.value)
		{
			ok=false;
			alert("Los contraseñas no coinciden");
			confirm_password.focus();
		}

		//todo o.k guarda los datos

		if(ok)
		{ 
			submit(); 
		}
	}
}
