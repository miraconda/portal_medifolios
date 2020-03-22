<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historia_Clinica extends CI_Controller {

    function validarPorPaciente(){
        $this->load->view('neumovida/historia_clinica/containers/validar_historia_por_paciente');
    }
    
    
    
    
    function consultarHistorialClinico(){
        header('Content-type: application/json; charset=utf-8');
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        #Cargamos modelos
        $this->load->model("medifolios/Model_HC");
        #Realizamos validaciones por empresa
        $data = json_decode($_POST["data"], true);
        switch ($data["institucion"]) {
            case "neumovida":
                #Validamos la sede
                if($data["sede"] == "armenia"){
                    $response = $this->Model_HC->consultarHistorialClinico("neumovida_armenia", $data["documento"]);
                }else{
                    $response = $this->Model_HC->consultarHistorialClinico("neumovida_caldas", $data["documento"]);
                }//if      
                break;

        }//switch
        #Retornamos respuesta
        echo json_encode($response);
    }//function consultarHistorialClinico()
    
    
    
    function consultarHistoriaClinica(){
        header('Content-type: application/json; charset=utf-8');
        #Creamos respuesta generica
        $response = array(
            "status"    => false,
            "title"     => "Error",
            "message"   => "Intentalo de nuevo mas tarde"
        );
        #Cargamos modelos
        $this->load->model("medifolios/Model_HC");
        #Realizamos validaciones por empresa
        $data = json_decode($_POST["data"], true);
        switch ($data["institucion"]) {
            case "neumovida":
                #Validamos la sede
                if($data["sede"] == "armenia"){
                    $response = $this->Model_HC->consultarHistoriaClinica("neumovida_armenia", $data["documento"], $data["cod_historia"]);
                }else{
                    $response = $this->Model_HC->consultarHistoriaClinica("neumovida_caldas", $data["documento"], $data["cod_historia"]);
                }//if      
                break;

        }//switch
        #Retornamos respuesta
        echo json_encode($response);
    }//function consultarHistoriaClinica()
}
