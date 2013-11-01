<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datatables extends CI_Controller {

	function __construct()
		{
		parent::__construct();	
		/* Standard Libraries */
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');	
		}
	
	function _example_output($output = null)
	{
		$this->load->view('datatables.php',$output);	
	}
	
	function test_output()
	{
		$this->load->view('test');
	}

	function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	

	function dimina_2001_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('dimina_till_2001');
			$crud->set_subject('ΔΙΜΗΝΑ 2001');
			$crud->order_by('year','desc');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	

	public function _callback_amount($value, $row)
	{
	  return number_format($value, 2, ',', ' ');
	}

	function companytype_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('companytype');
			$crud->required_fields('eponimia');
			$crud->set_subject('ΕΙΔΟΣ ΕΤΑΙΡΙΑΣ ΓΙΑ ΦΠΑ');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	

	function dimina_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			
			$crud->set_table('dimina');
			$crud->set_subject('ΔΙΜΗΝΑ');
			$crud->order_by('diminaid','desc');
			$crud->callback_column('esoda',array($this,'_callback_amount'));
			$crud->callback_column('fpa_esoda',array($this,'_callback_amount'));
			$crud->callback_column('fpa1',array($this,'_callback_amount'));
			$crud->callback_column('fpa2',array($this,'_callback_amount'));
			$crud->callback_column('exoda',array($this,'_callback_amount'));
			$crud->callback_column('fpa_exoda',array($this,'_callback_amount'));
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	

	function outcome_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('outcome');
			$crud->set_subject('ΕΞΟΔΑ');
			$crud->set_relation('companyid','companies','eponimia');
			$crud->unset_edit_fields('outcomeid');
			$crud->unset_add_fields('outcomeid');
			$crud->change_field_type('date', 'date', '$date');
			$crud->change_field_type('amount', 'number', '$amount');
			$crud->callback_column('amount',array($this,'_callback_amount'));
			$crud->order_by('date','desc');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	
	
	function income_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('income');
			$crud->set_subject('ΕΣΟΔΑ');
			$crud->unset_edit_fields('incomeid');
			$crud->unset_add_fields('incomeid');
			$crud->set_relation('customerid','customers','eponimia');
			$crud->change_field_type('date', 'date', '$date');
			$crud->callback_column('total',array($this,'_callback_amount'));
			$crud->order_by('Date','desc');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	
	
	function companies_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('companies');
			$crud->set_subject('ΠΡΟΜΗΘΕΥΤΕΣ');
			$crud->required_fields('eponimia');
			$crud->set_relation('companytype','companytype','companytypename');
			$crud->columns('companyid','eponimia','companytype','afm');
			$crud->unset_edit_fields('companyid');
			$crud->unset_add_fields('companyid');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	function contracts_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('contracts');
			$crud->set_subject('ΣΥΜΒΑΣΕΙΣ');
			$crud->unset_edit_fields('contractid');
			$crud->unset_add_fields('contractid');
			$crud->set_relation('customerid','customers','eponimia');
			$crud->change_field_type('signdate', 'date', '$signdate');
			$crud->change_field_type('from', 'date', '$from');
			$crud->change_field_type('to', 'date', '$to');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	function customers_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('customers');
			$crud->set_subject('ΕΤΑΙΡΙΕΣ');
			$crud->required_fields('eponimia');
			$crud->columns('customerid','eponimia','afm');
			$crud->unset_edit_fields('customerid');
			$crud->unset_add_fields('customerid');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function alla_esoda_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('esoda_black');
			$crud->set_subject('ΑΛΛΑ ΕΣΟΔΑ');
			$crud->set_relation('customerid','customers','eponimia');
			$crud->change_field_type('date', 'date', '$date');
			$crud->order_by('date','desc');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	

	function fpa_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('fpa');
			$crud->set_subject('ΦΠΑ');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	

	
	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}
	

}
