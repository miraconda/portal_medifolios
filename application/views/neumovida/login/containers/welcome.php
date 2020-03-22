<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#662D91">


        <title>Bienvenido a Neumovida en tu Vida</title>

        <!-- Favicon icon -->        
        <link rel="icon" type="image/png" href="https://neumovida.com/wp-content/uploads/2019/04/favicon-100x100.png" />

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- BIBLIOTECA VEX -->
        <script src="<?= base_url() ?>assets/third_party/vex/js/vex.combined.min.js"></script>
        <script>vex.defaultOptions.className = 'vex-theme-wireframe'</script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/third_party/vex/css/vex.css" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/third_party/vex/css/vex-theme-wireframe.css" />


        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/utiles.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                background: url(assets/images/backgrounds/19716.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 4px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 2px;
            }

            .button-verde {
                background-color: white; 
                color: black; 
                border: 1px solid #4CAF50;
            }

            .button-verde:hover {
                background-color: #4CAF50;
                color: white;
            }

            .button-blue {
                background-color: white; 
                color: black; 
                border: 1px solid #1b5ca5;
            }

            .button-blue:hover {
                background-color: #1b5ca5;
                color: white;
            }

            .login-container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-width: 300px;
                height: 100%;
                padding: 0 15px                  
            }

            .modulos-login{
                padding:10px;
            }

            .card-body{
                padding: 1.00rem !important;
            }






            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #ffffffab;
                border-radius: 10px 10px 0px 0px;
                -moz-border-radius: 10px 10px 0px 0px;
                -webkit-border-radius: 10px 10px 0px 0px;
                border: 0px solid #000000;
                width: fit-content;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #1b5ca5;
                color: white;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                border-radius: 0px 0px 10px 10px;
                -moz-border-radius: 0px 0px 10px 10px;
                -webkit-border-radius: 0px 0px 10px 10px;
                border: 0px solid #000000;
                background-color: #1264a921;
            }

            .tarjeta-titulo{
                color: #1b5ca5;
                font-size: 20px;
                width: 100%;
                text-align: center;
                font-weight: bold;
            }

            .tarjeta-descripcion{
                text-align: center;
            }

            .tarjeta-botones{
                width:100%;
                text-align: center;
            }

            @media(min-width:576px) {
                .modulos-login{
                    width:400px;
                }
            }

            @media(min-width:768px) {
                .modulos-login{
                    width:650px;
                }
            }

            @media(min-width:992px) {
                .modulos-login{
                    width:700px;
                }
            }

            @media(min-width:1200px) {
                .modulos-login{
                    width:1000px;
                }
            }




        </style>
    </head>

    <body style="background-color:aliceblue;">

        <div class="login-container">


            <div style="margin: 20px 0;">                
                <img class="img-responsive" alt="Logo Neumovida" src="https://neumovida.com/wp-content/uploads/2019/05/logo-neumovida.png"  width="300"  />
            </div>




            <div class="">

                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'pacientes')" id="defaultOpen">Pacientes</button>
                    <button class="tablinks" onclick="openTab(event, 'entidades')">Entidades</button>
                </div>

                <div id="pacientes" class="tabcontent">
                    <div class="row modulos-login">

                        <!-- ****LOGIN**** 
                        <div class="col-12 col-md-6 padding-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                        <div style="display:flex;">
                                            <img src="<?= base_url() ?>assets/iconos/flaticon/2633881.svg" width="50"/>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <label class="no-margin tarjeta-titulo">Inicio de Sesion</label>
                                            <p class="no-margin tarjeta-descripcion">Inicia sesion ahora y evita las validaciones para obtener tu historia clinica o agendar tus citas.</p>
                                            <label class="no-margin tarjeta-botones"><button class="button button-blue" onclick="pacienteLogin();">Login</button></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ****/LOGIN**** -->

                        <!-- ****REGISTRO**** 
                        <div class="col-12 col-md-6 padding-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                        <div style="display:flex;">
                                            <img src="<?= base_url() ?>assets/iconos/flaticon/2361884.svg" width="50"/>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <label class="no-margin tarjeta-titulo">Registro</label>
                                            <p class="no-margin tarjeta-descripcion">¿Ya eres paciente de Neumovida? valida tus datos y obten privilegios en agendamiento ahora.</p>
                                            <label class="no-margin tarjeta-botones"><button class="button button-blue" onclick="pacienteRegistro();">Registro</button></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                        <!-- ****/REGISTRO**** -->

                        <!-- ****HISTORIA CLINICA**** -->
                        <div class="col-12 col-md-6 padding-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                        <div style="display:flex;">
                                            <img src="<?= base_url() ?>assets/iconos/flaticon/503948.svg" width="50"/>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <label class="no-margin tarjeta-titulo">Historia Clinica</label>
                                            <p class="no-margin tarjeta-descripcion">Evita las filas y el papel, consulta tu historial medico ahora.</p>
                                            <label class="no-margin tarjeta-botones"><button class="button button-blue" onclick="pacienteHistorial();">Consultar Historial</button></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>               
                        <!-- ****/HISTORIA CLINICA**** -->

                        <!-- ****AGENDA DE CITAS**** 
                        <div class="col-12 col-md-6 padding-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                        <div style="display:flex;">
                                            <img src="<?= base_url() ?>assets/iconos/flaticon/503909.svg" width="50"/>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <label class="no-margin tarjeta-titulo">Agenda de Citas</label>
                                            <p class="no-margin tarjeta-descripcion">Evita las salas de espera y las llamadas, agenda tu cita de manera virtual ya!.</p>
                                            <label class="no-margin tarjeta-botones"><button class="button button-blue" onclick="pacienteAgenda();">Solicitar Cita</button></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>               
                        <!-- ****/AGENDA DE CITAS**** -->

                        <!-- ****NECESITO QUE CONTACTO**** 
                        <div class="col-12 col-md-6 padding-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                        <div style="display:flex;">
                                            <img src="<?= base_url() ?>assets/iconos/flaticon/263236.svg" width="50"/>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <label class="no-margin tarjeta-titulo">¿Necesitas Ayuda?</label>
                                            <p class="no-margin tarjeta-descripcion">Dejanos un mensaje o comunicate con nuestras lineas de atencion.</p>
                                            <label class="no-margin tarjeta-botones"><button class="button button-blue" onclick="pacienteContacto();">Solicitar Ayuda</button></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>               
                        <!-- ****/NECESITO QUE CONTACTO**** -->
                    </div>
                </div>




                <div id="entidades" class="tabcontent">
                    <div class="row modulos-login">

                        <!-- ****LOGIN**** -->
                        <div class="col-12 col-md-6 padding-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display:flex;">
                                        <div style="display:flex;">
                                            <img src="<?= base_url() ?>assets/iconos/flaticon/2633881.svg" width="50"/>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <label class="no-margin tarjeta-titulo">Inicio de Sesion</label>
                                            <p class="no-margin tarjeta-descripcion">Inicia sesion ahora y evita las validaciones para obtener tu historia clinica o agendar tus citas.</p>
                                            <label class="no-margin tarjeta-botones"><a class="button button-blue" href="#">Login</a></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ****/LOGIN**** -->

                    </div>
                </div>

            </div>




        </div>





        <script>
            var base_url = "<?=base_url()?>";
        </script>

        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
            
            
            
            
            
            function pacienteLogin(){
                return false;
            }//function usuarioLogin()
            
            
            function pacienteRegistro(){
                document.location.href = base_url+"Registro/paciente";
            }//function usuarioRegistro()
            
            
            function pacienteHistorial(){
                vex.dialog.confirm({
                    message: 'Para acceder a tu historial clinico directamente debes de iniciar sesion, de lo contrario deberas realizar un pequeño formulario para validar tu identidad.',
                    buttons: [
                        $.extend({}, vex.dialog.buttons.YES, { text: 'Validacion' }),
                        //$.extend({}, vex.dialog.buttons.NO, { text: 'Login' })
                    ],
                    callback: function (value) {
                        if (value) {
                            console.log('Click en Validacion.');
                            document.location.href = base_url+"Historia_Clinica/validarPorPaciente";                            
                        } else {
                            console.log('Click en Login.')
                        }
                    }
                });
            }//function pacienteHistorial()
            
            
            function pacienteAgenda(){
                
            }//function pacienteAgenda()
            
            function pacienteContacto(){
                
            }//function pacienteContacto()
        </script>


    </body>
</html>