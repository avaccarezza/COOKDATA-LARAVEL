function check() { /*checkea el user y pass*/
 
        alert("Usuario o contraseña incorrectos") /*despliega un mensaje de error*/
    
}

// Alerta de confirmacion para borrar usuario en el Index Panel
function confirmacion()
{
  var respuesta = confirm("¿Desea realmente eliminar el usuario?");
    if(respuesta == true)
    {
      return true;
    }else
    {
    return false;
    }
}