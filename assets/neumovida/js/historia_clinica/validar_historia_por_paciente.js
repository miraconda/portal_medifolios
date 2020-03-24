'use strict';
$(document).ready(function () {
    

    
    
    
    
    
    
    
    
    
    //Mostramos formulario
    var form = $("#form-historial-paciente").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            
            //Validamos que el numero de identificacion pertenezca a la empresa   
            if(currentIndex === 0){
                var pacienteValido = validarNomPaciente();
                if(!pacienteValido){                  
                    vex.dialog.alert('No es un paciente valido');
                    return false;
                }//if
            }//if
           
           
            //Validamos que las preguntas se hayan respondido correctamente
            if(currentIndex === 1){                
                var preguntasValidadas = document.getElementById("preguntas_validadas").value;
                if(preguntasValidadas == 0){                    
                    vex.dialog.alert('Debe validar las preguntas antes de continuar.');
                    return false;
                }//if
                
                var preguntasValidas = document.getElementById("preguntas_validas").value;
                if(preguntasValidas == 0){                    
                    vex.dialog.alert('Las preguntas no son validas.');
                    return false;
                }//if                
            }//if
                                    

            //Consultamos los datos de historia clinica
            if(currentIndex === 2){      
                alert();
                consultarDatosHC();
            }//if


            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {

            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex) {

            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            
            
            window.location.href = base_url;
            
            
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {

            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });
});


function validarIdentidadPaciente(){
    var status = false;
    var data = new FormData();
    var infoEnviar = {
        institucion: "neumovida",
        sede: document.getElementById("paciente-sede").value,
        documento: document.getElementById("paciente-identificacion").value
    }
    data.append("data", JSON.stringify(infoEnviar));
    //Creamos la solicitud de envio tipo FETCH
    fetch(base_url + 'Registro/validarDocumentoPaciente', {
        method: "POST",
        body: data
    })
    .then(function(res) { return res.json(); })
    .then(function(response) {
        //Validamos la respuesta del servidor
        if (response.status) {
            document.getElementById("paciente-nombre").value = response.nomPaciente;            
            crearPreguntasSeguridadHTML(response.preguntas);
        }else{
            vex.dialog.alert('Documento no encontrado en sistema.');
        }//if  
    })//FETCH       
    
    return status;
}//



function validarNomPaciente(){
    var nom = document.getElementById("paciente-nombre").value;
    if(nom != ""){
        return true;
    }//if
    return false;
}//function validarNomPaciente()


function crearPreguntasSeguridadHTML(preguntas){
    var pregunta01HTML = ''+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-telefono" value="'+preguntas[0][0]+'" data-bv-field="paciente-telefono" onchange="definirSeleccionPregunta(0, \''+preguntas[0][0]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[0][0]+
                        '   </label>'+
                        '</div>';
    
    pregunta01HTML += ''+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-telefono" value="'+preguntas[0][1]+'" data-bv-field="paciente-telefono" onchange="definirSeleccionPregunta(0, \''+preguntas[0][1]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[0][1]+
                        '   </label>'+
                        '</div>';
                
    pregunta01HTML += ''+            
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-telefono" value="'+preguntas[0][2]+'" data-bv-field="paciente-telefono" onchange="definirSeleccionPregunta(0, \''+preguntas[0][2]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[0][2]+
                        '   </label>'+
                        '</div>';
                
    pregunta01HTML += ''+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-telefono" value="'+preguntas[0][3]+'" data-bv-field="paciente-telefono" onchange="definirSeleccionPregunta(0, \''+preguntas[0][3]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[0][3]+
                        '   </label>'+
                        '</div>'+
                        '';
                
                
    var pregunta02HTML = ''+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-direccion" value="'+preguntas[1][0]+'" data-bv-field="paciente-direccion" onchange="definirSeleccionPregunta(1, \''+preguntas[1][0]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[1][0]+
                        '   </label>'+
                        '</div>'+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-direccion" value="'+preguntas[1][1]+'" data-bv-field="paciente-direccion" onchange="definirSeleccionPregunta(1, \''+preguntas[1][1]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[1][1]+
                        '   </label>'+
                        '</div>'+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-direccion" value="'+preguntas[1][2]+'" data-bv-field="paciente-direccion" onchange="definirSeleccionPregunta(1, \''+preguntas[1][2]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[1][2]+
                        '   </label>'+
                        '</div>'+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-direccion" value="'+preguntas[1][3]+'" data-bv-field="paciente-direccion" onchange="definirSeleccionPregunta(1, \''+preguntas[1][3]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[1][3]+
                        '   </label>'+
                        '</div>'+
                        '';
                
                
    var pregunta03HTML = ''+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-ciudad" value="'+preguntas[2][0]+'" data-bv-field="paciente-ciudad" onchange="definirSeleccionPregunta(2, \''+preguntas[2][0]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[2][0]+
                        '   </label>'+
                        '</div>'+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-ciudad" value="'+preguntas[2][1]+'" data-bv-field="paciente-ciudad" onchange="definirSeleccionPregunta(2, \''+preguntas[2][1]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[2][1]+
                        '   </label>'+
                        '</div>'+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-ciudad" value="'+preguntas[2][2]+'" data-bv-field="paciente-ciudad" onchange="definirSeleccionPregunta(2, \''+preguntas[2][2]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[2][2]+
                        '   </label>'+
                        '</div>'+
                        '<div class="radio radiofill radio-primary radio-inline">'+
                        '   <label>'+
                        '       <input type="radio" name="paciente-ciudad" value="'+preguntas[2][3]+'" data-bv-field="paciente-ciudad" onchange="definirSeleccionPregunta(2, \''+preguntas[2][3]+'\')" >'+
                        '       <i class="helper"></i>'+preguntas[2][3]+
                        '   </label>'+
                        '</div>'+
                        '';
                
                
    document.getElementById("paciente-pregunta-telefono").innerHTML = pregunta01HTML;
    document.getElementById("paciente-pregunta-direccion").innerHTML = pregunta02HTML;
    document.getElementById("paciente-pregunta-ciudad").innerHTML = pregunta03HTML;
}//function crearPreguntasSeguridadHTML(preguntas)



var pacienteTelefono = "";
var pacienteDireccion = "";
var pacienteCiudad = "";

function definirSeleccionPregunta(numPregunta, value){   
    switch(numPregunta){
        case 0:
            pacienteTelefono = value;
            break;
            
        case 1:
            pacienteDireccion = value;
            break;
            
        case 2:
            pacienteCiudad = value;
            break;
    }//switch    
}//function definirSeleccionPregunta(numPregunta, value)



function validarPreguntasPaciente(){
    //Definimos que se valido
    document.getElementById("preguntas_validadas").value = 1;
    
    var data = new FormData();
    var infoEnviar = {
        institucion: "neumovida",
        sede: document.getElementById("paciente-sede").value,
        documento: document.getElementById("paciente-identificacion").value,
        pregunta_01: pacienteTelefono,
        pregunta_02: pacienteDireccion,
        pregunta_03: pacienteCiudad
    }
    data.append("data", JSON.stringify(infoEnviar));
    //Creamos la solicitud de envio tipo FETCH
    fetch(base_url + 'Registro/validarPreguntasPaciente', {
        method: "POST",
        body: data
    })
    .then(function(res) { return res.json(); })
    .then(function(response) {
        //Validamos la respuesta del servidor
        if (response.status) {
            document.getElementById("preguntas_validas").value = 1;
            document.getElementById("div-validar-preguntas").innerHTML = '<span class="badge badge-success">Preguntas validadas exitosamente</span>';
            vex.dialog.alert('Preguntas validadas, puede continuar con el registro.');
            consultarDatosHC();
            return true;
        }else{
            document.getElementById("preguntas_validas").value = 0;
            document.getElementById("div-validar-preguntas").innerHTML = '<span class="badge badge-danger">Error en preguntas, la informacion no corresponde</span>';
            vex.dialog.alert('La validacion de preguntas fue fallida, revisa los datos ingresados.');
            return false;
        }//if  
    })//FETCH             
}//function validarPreguntasPaciente()



/*****************************************************************************************************************************/
/*****************************************************************************************************************************/
/*****************************************************************************************************************************/
function consultarDatosHC(){
    var data = new FormData();
    var infoEnviar = {
        institucion: "neumovida",
        sede: document.getElementById("paciente-sede").value,
        documento: document.getElementById("paciente-identificacion").value
    }
    data.append("data", JSON.stringify(infoEnviar));

    //Creamos la solicitud de envio tipo FETCH
    fetch(base_url + 'Historia_Clinica/consultarHistorialClinico', {
        method: "POST",
        body: data
    })
    .then(function(res) { return res.json(); })
    .then(function(response) {
        //Validamos la respuesta del servidor
        if (response.status) {
            inicializarTabla(response.data);
        }else{
            vex.dialog.alert(response.message);
        }//if  
    })//FETCH 
}//function consultarDatosHC()
/*****************************************************************************************************************************/
/*****************************************************************************************************************************/
/*****************************************************************************************************************************/
function inicializarTabla(info){
    //Creamos un objeto de tipo DataTable
    var tableHistorial = $('#dt-historial').DataTable({
        //Obtenemos la informacion de los clientes
        data: info,
        //Definimos las columnas
        columns: [
            { data: "fecha" },
            { data: "nom_formato" },          
            { defaultContent: '<button type="button" class="btn btn-info btn-outline-info view-btn"><i class="icofont icofont-eye "></i></button>' }
        ],
        //Traduccion de la tabla
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });         
    
    $('#dt-historial tbody').on('click', '.view-btn', function() {
        //Obtenemos los atributos de la tabla
        var data = tableHistorial.row($(this).parents('tr')).data(); 
        consultarHC(data.cod_historia_cifrado);        
    });
    
    

}//function inicializarTabla




function consultarHC(cod_historia_cifrado){
    var data = new FormData();
    var infoEnviar = {
        institucion: "neumovida",
        sede: document.getElementById("paciente-sede").value,
        cod_historia: cod_historia_cifrado,
        documento: document.getElementById("paciente-identificacion").value
    }
    data.append("data", JSON.stringify(infoEnviar));

    //Creamos la solicitud de envio tipo FETCH
    fetch(base_url + 'Historia_Clinica/consultarHistoriaClinica', {
        method: "POST",
        body: data
    })
    .then(function(res) { return res.json(); })
    .then(function(response) {
        console.log(response);
        //Validamos la respuesta del servidor
        if (response.status) {                        
            var ventana = window.open("","genkkode","width=auto,height=auto,scrollbars=1,resizable=1");
            ventana.document.open();
            ventana.document.write(response.data.data);
            ventana.document.close();                                    
        }else{
            vex.dialog.alert(response.message);
        }//if  
    })//FETCH 
    
    
    
    
    
    
    
    
    
    
}