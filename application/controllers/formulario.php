<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formulario extends CI_Controller {
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
	public function form1()
	{
		$this->load->view('vista_f1'); //cargamos la vista del Alumno
	}
        public function form2()
	{
		$this->load->view('vista_f2'); //cargamos la vista del Alumno
	}
        public function form4()
	{
		$this->load->view('vista_f4'); //cargamos la vista del Alumno
	}
        public function form5()
	{
		$this->load->view('vista_f5'); //cargamos la vista del Alumno
	}
        public function form6()
	{
		$this->load->view('vista_f6'); //cargamos la vista del Alumno
	}
}
