<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    function paciente(){
        $this->load->view('neumovida/registro/containers/paciente');
    }
    
    
    
    function validarDocumentoPaciente(){
        header('Content-type: application/json; charset=utf-8');
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        #Cargamos modelos
        $this->load->model("Model_Seguridad");
        $this->load->model("medifolios/Model_Pacientes");
        #Realizamos validaciones por empresa
        $data = json_decode($_POST["data"], true);
        $response["info"] = $data;
        switch ($data["institucion"]) {
            case "neumovida":
                #Validamos la sede
                if($data["sede"] == "armenia"){
                    $info = $this->Model_Pacientes->consultarPacientePorId("neumovida_armenia", $data["documento"]);
                }else{
                    $info = $this->Model_Pacientes->consultarPacientePorId("neumovida_caldas", $data["documento"]);
                }//if
                if($info["status"]){
                    #Con la informacion del paciente construimos las preguntas de validacion
                    $preguntas = $this->Model_Seguridad->crearPreguntasValidacion($info["data"]);
                    $response = array(
                        "status"    => true,
                        "title"     => "Info Encontrada",
                        "message"   => "Se encuentra la siguiente informacion:",
                        "nomPaciente" => $info["data"]["nombre1"]." ".$info["data"]["nombre2"]." ".$info["data"]["apellido1"]." ".$info["data"]["apellido2"],
                        "preguntas" => $preguntas
                    );//response                                        
                }else{
                    $response = $info;
                }
                break;

        }//switch
        #Retornamos respuesta
        echo json_encode($response);
    }//function validarDocumentoPaciente()
    
    
    
    
    function validarPreguntasPaciente(){
        header('Content-type: application/json; charset=utf-8');
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        #Cargamos modelos
        $this->load->model("Model_Seguridad");
        $this->load->model("medifolios/Model_Pacientes");
        #Realizamos validaciones por empresa
        $data = json_decode($_POST["data"], true);
        $response["info"] = $data;
        switch ($data["institucion"]) {
            case "neumovida":
                #Validamos la sede
                if($data["sede"] == "armenia"){
                    $info = $this->Model_Pacientes->consultarPacientePorId("neumovida_armenia", $data["documento"]);
                }else{
                    $info = $this->Model_Pacientes->consultarPacientePorId("neumovida_caldas", $data["documento"]);
                }//if
                if($info["status"]){
                    $preguntas = array(
                        "pregunta_01"   => $data["pregunta_01"],
                        "pregunta_02"   => $data["pregunta_02"],
                        "pregunta_03"   => $data["pregunta_03"]
                    );
                    #Con la informacion del paciente construimos las preguntas de validacion
                    $response = $this->Model_Seguridad->validarPreguntas($info["data"], $preguntas);                                                                                             
                }else{
                    $response = $info;
                }
                break;

        }//switch                
        echo json_encode($response);
    }//function validarPreguntasPaciente()
    
    
    
    
    function crearUsuario(){
        header('Content-type: application/json; charset=utf-8');
        #Creamos respuesta generica
        $response = array(
            "status"    => true,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        
        echo json_encode($response);
    }
}
