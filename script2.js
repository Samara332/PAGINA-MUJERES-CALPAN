function ingresar(a){
  
  var nom='123';
  var usuario= document.getElementById("usuario").value;
  var cont=document.getElementById("contr").value;
  
  if (cont!=""&& usuario!=""){
      var ex=compr(a,usuario);
      document.getElementById("cambio").innerHTML = ex[0];
      document.getElementById("cambio2").innerHTML = ex[1];
      document.getElementById("cambio3").innerHTML = cont;
      if (ex[0]==0){
        if (a[ex[1]][1]==cont){
          if (window.confirm('Ingreso exitoso')) 
                    {
                    window.location.href='tablero.html';
                    }
                else{}
        }else{
          alert("Contraseña incorrecta")
        }

      }else{
        alert('Usuario incorrecto o inexistente, por favor registrese');
      }
  }else{
    alert('Es necesario ingresar los datos')
  }
}
function compr(data,us){
  var x=0;
  while (x < data.length) 
  {
    var existe = data[x].indexOf(us)
    if (existe!=-1){
      var index=x;
      return [existe,index]
      break;
    }else{
    }
    x++;
  }
  return [existe,x]
}

//Nuevo usuario
function crear(){
    var ncont;
    var cont2;
    var nus;
    nus=document.getElementById("nuevous").value;
    ncont=document.getElementById("nuevacont").value;
    cont2=document.getElementById("contr2").value;
    //alert("contraseña="+cont+", confirmación="+cont2);
    if (ncont!=""&& nus!=""){
        if (ncont==cont2){
            if (window.confirm('Nuevo usuario creado')) 
                {
                window.location.href='nuevo.php?us='+nus+'&cont='+ncont;
                }
            else{

            }
        }
        else{
            alert("La contraseña no coincide con la confirmación")
        }
    }else{
    alert("Es necesario ingresar toda la información")}


}