<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Consultar Historia Clinica - Neumovida</title>
        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#">
        <meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">
        <!-- Favicon icon -->        
        <link rel="icon" type="image/png" href="https://neumovida.com/wp-content/uploads/2019/04/favicon-100x100.png" />
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/bower_components/bootstrap/css/bootstrap.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/icon/icofont/css/icofont.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/icon/font-awesome/css/font-awesome.min.css">
        <!-- Menu-Search css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/pages/menu-search/css/component.css">
        <!--forms-wizard css-->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery.steps/css/jquery.steps.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/css/style.css">
     
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/utiles.css">

        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/css/linearicons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/css/ionicons.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/css/jquery.mCustomScrollbar.css">
        
        <!-- Menu-Search css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/pages/menu-search/css/component.css">
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/pages/data-table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
        
        <!-- BIBLIOTECA VEX -->
        <script src="<?= base_url() ?>assets/third_party/vex/js/vex.combined.min.js"></script>
        <script>vex.defaultOptions.className = 'vex-theme-wireframe'</script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/third_party/vex/css/vex.css" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/third_party/vex/css/vex-theme-wireframe.css" />
    </head>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>
        <!-- Pre-loader end -->

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        
                        
                        <div class="">
                            <div class="pcoded-inner-content">
                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page header start -->
                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h4>Historia Clinica</h4>
                                                <span>Para consultar tu historial clinico y resultados de laboratorio, primero debes de validar tu identidad.</span>
                                            </div>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="<?=base_url()?>">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Historia Clinica</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Page header end -->
                                        <!-- Page body start -->
                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                             
                                  
                                                    <!-- Verticle Wizard card start -->
                                                    <div class="card">                                                 
                                                        <div class="card-block">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div id="wizard-3">
                                                                        <section>
                                                                            <form class="wizard-form" id="form-historial-paciente" action="#">
                                                                                <h3> Identificacion </h3>
                                                                                <fieldset>
                                                                                                                                                                                                                                                                                                         
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-4 col-lg-2">Sede:</div>
                                                                                        <div class="col-sm-8 col-lg-10">
                                                                                            <select class="form-control required" id="paciente-sede" name="paciente-sede">
                                                                                                <option value="armenia">Armenia</option>
                                                                                                <option value="caldas">Caldas</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                                                                                                                                                                                            
                                                                                    
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-4 col-lg-2">
                                                                                            <label for="paciente-identificacion" class="block">Num. Identificacion:</label>
                                                                                        </div>
                                                                                        <div class="col-sm-8 col-lg-10">
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon" id="basic-addon1" onclick="validarIdentidadPaciente()"><i class="fa fa-check"></i></span>                                                                                                
                                                                                                <input id="paciente-identificacion" name="paciente-identificacion" type="number" class="required form-control no-margin" onchange="validarIdentidadPaciente()">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-4 col-lg-2">
                                                                                            <label for="paciente-nombre" class="block">Nombre:</label>
                                                                                        </div>
                                                                                        <div class="col-sm-8 col-lg-10">
                                                                                            <input id="paciente-nombre" name="paciente-nombre" type="text" class="form-control" disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                                                                                                                                                                                            
                                                                                </fieldset>
                                                                                
                                                                                
                                                                                <h3> Validacion </h3>
                                                                                
                                                                                
                                                                                <fieldset>
                                                                                    
                                                                                    <input id="preguntas_validadas" value="0" type="hidden" >
                                                                                    <input id="preguntas_validas" value="0" type="hidden" >
                                                                                    
                                                                                    <div class="form-group row has-success">
                                                                                        <label class="col-sm-4 col-lg-2">¿Cual de estos telefonos reconoce?</label>
                                                                                        <div class="col-sm-8 col-lg-10">
                                                                                            <div class="form-radio" id="paciente-pregunta-telefono">
                                                                 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="form-group row has-success">
                                                                                        <label class="col-sm-4 col-lg-2">¿Cual de estas direcciones reconoce?</label>
                                                                                        <div class="col-sm-8 col-lg-10">
                                                                                            <div class="form-radio" id="paciente-pregunta-direccion">
                                                                 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                             
                                                                                    <div class="form-group row has-success">
                                                                                        <label class="col-sm-4 col-lg-2">¿Cual de estas es su ciudad de residencia?</label>
                                                                                        <div class="col-sm-8 col-lg-10">
                                                                                            <div class="form-radio" id="paciente-pregunta-ciudad">
                                                                 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>                                                                                    
                                                                                    
                                                                                    
                                                                                    <div id="div-validar-preguntas">
                                              
                                                                                    </div>
                                                                                    <div>
                                                                                        <a class="btn btn-inverse btn-outline-inverse" onclick="validarPreguntasPaciente();"><i class="icofont icofont-exchange"></i>Validar Preguntas</a>
                                                                                    </div>
                                                                                    
                                                                                </fieldset>
                                                                                
                                                                                
                                       
                                                                                
                                                                                
                                                                                <h3> Historial </h3>
                                                                                <fieldset>
                                                                                    
                                                                                    
                                                                                    <div class="table-responsive dt-responsive">
                                                                                        <table id="dt-historial" class="table table-striped table-bordered nowrap" style="width:100%">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Fecha</th>
                                                                                                    <th>Nombre Historia</th>                                    
                                                                                                    <th>Edicion</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                               
                                                                                        </table>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </fieldset>
                                                                            </form>
                                                                    
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Verticle Wizard card end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page body end -->
                                    </div>
                                </div>
                                <!-- Main-body end -->
           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
        <script>
            var base_url = "<?=base_url()?>";
        </script>
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/popper.js/js/popper.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/bootstrap/js/bootstrap.min.js"></script>

        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

        <!-- modernizr js -->
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/modernizr/js/modernizr.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/modernizr/js/css-scrollbars.js"></script>

        <!-- classie js -->
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/bower_components/classie/js/classie.js"></script>

        <!--Forms - Wizard js-->
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery.cookie/js/jquery.cookie.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery.steps/js/jquery.steps.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/jquery-validation/js/jquery.validate.js"></script>

        <!-- Validation js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>        
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/pages/form-validation/validate.js"></script>

        

        <script src="<?=base_url()?>assets/plantillas/mash_able/js/pcoded.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/js/demo-12.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/js/jquery.mousewheel.min.js"></script>
        
        
        

        <!-- data-table js -->
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/pages/data-table/js/jszip.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/pages/data-table/js/pdfmake.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/pages/data-table/js/vfs_fonts.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>assets/plantillas/mash_able/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>     
        
        
        
        
        
        <!-- Custom js -->
        <script type="text/javascript" src="<?=base_url()?>assets/plantillas/mash_able/js/script.js"></script>
        <script src="<?=base_url()?>assets/neumovida/js/historia_clinica/validar_historia_por_paciente.js"></script>

    </body>

</html>
