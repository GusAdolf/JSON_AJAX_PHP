
$(document).ready(function(){

   $("#refrescar").click(function(){
     
      $("#userTable tbody").empty();

      $.ajax({
         url: 'php/consulta.php',
         type: 'get',
         dataType: 'JSON',
         success: function(response){
         var len = response.length;
         for(var i=0; i<len; i++){

         
         var fecha= response[i].fecha;
         var taller = response[i].taller;
         var costos = response[i].costos;
         var kilometraje = response[i].kilometraje;
         var mantenimiento= response[i].mantenimiento;
         var observaciones= response[i].observaciones;
            
         var tr_str = "<tr>" +
         "<td align='left'>" + fecha + "</td>" +
         "<td align='left'>" + taller + "</td>" +
         "<td align='left'>" + costos + "</td>" +
         "<td align='left'>" + kilometraje + "</td>" +
         "<td align='left'>" + mantenimiento + "</td>" +
         "<td align='left'>" + observaciones + "</td>" +
         "</tr>";
         
         $("#userTable tbody").append(tr_str);
         }
         
         }
         });

   });
   
   });



/*
$(document).ready(function() {
   
   $("#refrescar").click(function(){
      $("#mostrar_tabla thead").empty();
       
      let fecha=$("#fecha").val(); 
      let taller=$("#n_taller").text();
      let costos=$("#costos").text(); 
      let kilometraje=$("#kilometraje").text();
      let mantenimiento=$("#mantenimiento option:selected").text();  
      let observaciones=$("#observaciones").val();  
     

          

       $.ajax ({
         url: "php/consulta.php",
         type: 'post',
         async: true,
         /*data: {fecha:fecha , taller:taller, costos:costos
            , kilometraje:kilometraje, mantenimiento:mantenimiento 
            , observaciones:observaciones},
         
        
         datatype:'json',
         
         success:function(data) {
            alert("Data: " + data + "\nStatus: " + status);
             let objeto_JSON = $.parseJSON(data).stringify();
             $("#mostrar_tabla thead").append("<tr>"+"<th scope='col'>Fecha</th>"+
                                                   "<th scope='col'>Nombre Taller</th>"+
                                                 "<th scope='col'>Cosotos</th>"+
                                                 "<th scope='col'>Kilometraje</th>"+
                                                 "<th scope='col'>Tipo mantenimiento</th>"+
                                                 "<th scope='col'>Observacion</th>"+
                                              "</tr>");
             $("#mostrar_tabla tbody").append("<tr>");
             $.each(objeto_JSON, function(i, value) {
                $("#mostrar_tabla tbody").append("<td align='center'>"+value+"</td>");
             });
             $("#mostrar_tabla tbody").append("</tr>");
             
          }
       });
       
      
     
      
   });
 
   
 });

 */
 
 
 