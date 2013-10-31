<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Modelo_acceso extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function datosAcceso($user, $password,$tipo) {
         $sql = "SELECT * FROM users WHERE username = '$user' and Password = '$password' and perfil='$tipo'"; 
        return $this->db->query($sql);
    }

}

?>
