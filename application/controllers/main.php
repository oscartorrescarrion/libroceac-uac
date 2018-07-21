
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Main extends CI_Controller {



	function __construct()

	{

		parent::__construct();



		$this->load->database();
    $this->load->library('grocery_CRUD');


	}



	public function index()

	{
    echo "<h1>Bienvenido al mundo de Codeigniter</h1>";//Solo un ejemplo!

		die();

	}



  public function registros()

	{
    //Tema y Textos

    $this->grocery_crud->set_subject('Registro CEAC');
		$this->grocery_crud->set_table('registros');
    $this->grocery_crud->set_theme('bootstrap');
    //Cambio de texto
    $this->grocery_crud->display_as('id','Numero');
    $this->grocery_crud->display_as('fecha','Fecha de ingreso');
    $this->grocery_crud->display_as('numero_reg','Num. de Solicitud');
    $this->grocery_crud->display_as('apellidop','Apellido Paterno');
    $this->grocery_crud->display_as('apellidom','Apellido Materno');
    $this->grocery_crud->display_as('fechaobs','Fecha de Observacion');
    //Campos requeridos
    $this->grocery_crud->required_fields('fecha');
    $this->grocery_crud->required_fields('nombre');
    $this->grocery_crud->required_fields('detalle');

    $this->grocery_crud->columns('id','fecha','numero_reg','nombre','apellidop','apellidom','detalle','observacion','fechaobs');
		$output = $this->grocery_crud->render();



		$this->_example_output($output);

	}



	function _example_output($output = null)



	{

		$this->load->view('vista.php',$output);

	}


}



/* End of file main.php */

/* Location: ./application/controllers/main.php */
