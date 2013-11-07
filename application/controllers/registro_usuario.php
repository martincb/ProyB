<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro_usuario extends CI_Controller {
	public function __construct() {
        parent::__construct();
       }
	public function index()
	{
        /*  $this->load->model('modelo_usuario');  
          $data['page_title'] = "Registro Usuarios";
          $usuarios = $this->modelo_usuario->datosUsuario(); 
           $data['usuarios'] = $usuarios;*/
          $this->load->view('vista_registro_usuario');
	} 
        public function altas(){
            //recogemos los datos obtenidos por POST
            $data['Username'] = $_POST['usuario'];
            $data['Password'] = $_POST['contrasenia'];
            $data['Nombre'] = $_POST['nombre'];
            $data['Paterno'] = $_POST['paterno'];
            $data['Materno'] = $_POST['materno'];
            $data['Correo'] = $_POST['correo'];
            $data['Perfil'] = $_POST['perfil'];
            //llamamos al modelo, concretamente a la función insert() para que nos haga el insert en la base de datos.
            $this->load->model('modelo_usuario');
            $this->modelo_usuario->insert($data);
            //mostramos la vista
           $this -> load -> helper ( 'url' );
            redirect('registro_usuario');  
        } 
        function bajas() {
         //obtenemos el nombre
          $usuario = $_POST['us'];
          //cargamos el modelo y llamamos a la función baja(), pasándole el nombre del registro que queremos borrar.
          $this->load->model('modelo_usuario');
          $this->modelo_usuario->baja($usuario);
          //mostramos la vista . 
          $this -> load -> helper ( 'url' );
            redirect('registro_usuario');
 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */