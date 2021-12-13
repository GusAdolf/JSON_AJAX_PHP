


function mostrar (){


if(document.getElementById("mantenimiento").value="preventivo"){

    return document.getElementById("preventivo_m").innerHTML ="<div class='col-2' >    <div class='p-3 bg-light'></div> </div> <div class='col-2'> <div class='p-3 bg-light'><input type='checkbox' id='aceite' name='aceite' value='aceite'> <label class='form-label'  for='vehicle1'> Cambio de Aceite</label></div> </div> <div class='col-2'>   <div class='p-3 bg-light'><input  class='form-label' type='checkbox' id='frenos' name='frenos' value='frenos'>  <label  class='form-label' for='vehicle2'> Frenos</label></div> </div> <div class='col-2'>  <div class='p-3 bg-light'><input class='form-label'  type='checkbox' id='llantas' name='llantas' value='llantas'>     <label class='form-label' for='vehicle3'> Llantas</label></div> ";
}


    
}

function borrar(){

    
if(document.getElementById("mantenimiento").value="correctivo"){

    return document.getElementById("preventivo_m").innerHTML=" <p>  </p> ";

}
}