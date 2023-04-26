function deseleccionarPerfiles(myapp){ 

    for(let i = 0; i < myapp.length ; i++){
        myapp[i].checked = false;
    }
}

function seleccionarAplicacionesSegunPerfil(){

    let perfiles = document.getElementById('perfiles').value;
    console.log(perfiles);
    var myapp = document.getElementsByClassName('myapp');
    deseleccionarPerfiles(myapp);
    //0-Gestion 1-MasterBBDD 2-Compras 3-Produccion 4-Ventas 5-Backoffice 6-Proyecto1
    switch(perfiles){
        case 4:
            myapp[0].checked = true;
            myapp[1].checked = true;
            myapp[2].checked = true;
            myapp[3].checked = true;
            myapp[4].checked = true;
           // myapp[5].checked = true;
            break;
        case 3:
            myapp[2].checked = true;
            myapp[3].checked = true;
            myapp[4].checked = true;
            break;
        case 5:
        myapp[0].checked = true;            
            break;
        case 6:           
            myapp[1].checked = true;
            break;
        case 7:
            myapp[2].checked = true;
            break;
        case 8:
            myapp[0].checked = true;
            myapp[2].checked = true;
            break;
        default:
            deseleccionarPerfiles(perfiles);
            break;
    }
}

// muestra y oculta el input para seleccionar cliente
function mostrarInputCliente(){
    var cliente = document.getElementById('cliente').value;
    if(cliente == "nuevo_cliente"){
      document.getElementById('nuevo_cliente').style.display="block";
      document.getElementById('nuevo_cliente').type ="text";
      document.getElementById('cliente').style.display="none";
    }else{
      document.getElementById('nuevo_cliente').style.display="none";
      document.getElementById('cliente').style.display="block";
    }
 }
 function mostrarInputPerfil(){
    var perfil = document.getElementById('perfiles').value;
    
    if(perfil == "nuevo_perfil"){
      document.getElementById('nuevo_perfil').style.display="block";
      document.getElementById('nuevo_perfil').type ="text";
      document.getElementById('perfiles').style.display="none";
    }else{
      document.getElementById('nuevo_perfil').style.display="none";
      document.getElementById('perfiles').style.display="block";
    }
 }
 function confirmacion(){
    window.confirm('¿Estas seguro que deseas borrar el usuario?');      
 }