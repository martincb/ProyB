<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Modelo_usuario extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function datosUsuario() {
         $sql = "SELECT perfil,username,Nombre,paterno,materno,correo FROM users"; 
        return $usuarios=$this->db->query($sql);
    }
    function insert($data) {
 $this->db->set('username', $data['Username']);
 $this->db->set('password', $data['Password']);
 $this->db->set('Nombre', $data['Nombre']);
 $this->db->set('paterno', $data['Paterno']);
  $this->db->set('materno', $data['Materno']);
 $this->db->set('correo', $data['Correo']);
 $this->db->set('perfil', $data['Perfil']);
 $this->db->insert('users');
 }
function baja ($usuario) {
 $this->db->where('username', $usuario);
 $this->db->delete('users');
 }
}

?>
