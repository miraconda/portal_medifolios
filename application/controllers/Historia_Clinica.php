<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historia_Clinica extends CI_Controller {

    function validarPorPaciente(){
        $this->load->view('neumovida/registro/containers/paciente');
    }
}
