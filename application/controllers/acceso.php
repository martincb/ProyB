<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acceso extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('vista_acceso'); //cargamos la vista inicial
	}

	function getAcceso() {
        $this->load->model('modelo_acceso'); //Cargar modelo para ocupar la base de datos
        //Recuperar datos post
        $user = $this->input->post('user');
        $password = $this->input->post('password');
       $tipo = $this->input->post('tipo');
        if ($user != '' && $password != '') {
            $resultado = $this->modelo_acceso->datosAcceso($user,$password,$tipo);
            $numreg = $resultado->num_rows(); // # de registros que regresa la consulta
            $datareg = $resultado->row_array(); //obtengo datos del primer registro de la columna
            if ($numreg > 0) {
                if ($tipo=='Administrador') {  /**/ 
                     $this -> load -> helper ( 'url' );
                    redirect('/acceso/admon');                  
                }
                  if ($tipo=='Maestro') {  
                       $this -> load -> helper ( 'url' );
                    redirect('/acceso/maes');          
                }
                  if ($tipo=='Alumno') { 
                       $this -> load -> helper ( 'url' );
                    redirect('/acceso/alum');                 
                }               
            } 
            else {
               // echo 'El usuario no se encuentra registrado';
                 //redirect('acceso');
                 echo "<script>
                   alert('El usuario no se encuentra registrado')
                 </script>"; 
            }
        } 
        else {
           // echo 'Proporciona usuario y contrasenia.';
           //redirect('acceso');
          echo "<script>
                  alert('Proporciona usuario y contrasenia.')
                </script>"; 
        }
    }
    function admon() {    
         $this -> load -> helper ( 'url' );
         redirect('administrador'); // 
    }
     function maes() { 
          $this -> load -> helper ( 'url' );
         redirect('maestro'); 
    }
     function alum() {  
          $this -> load -> helper ( 'url' );
         redirect('alumno'); 
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */