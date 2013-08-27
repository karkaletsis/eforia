<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Queries extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eforia_model');
	}
	
	public function index()
	{
	}

	public function dapanes()
	{
	$this->load->helper('form');
	$year = $this->input->post('year');
	if (empty($year)) $year='2011';
	$data['dapanes'] = $this->eforia_model->dapanes($year);
	$data['esoda'] = $this->eforia_model->esoda($year);
	$this->load->view('dapanes',$data);
	}
	
	public function sigkentrotikes()
	{
	$this->load->helper('form');
	$year = $this->input->post('year');
	if (empty($year)) $year='2011';
	$data['exoda_xoris_fpa'] = $this->eforia_model->get_year_outcome_no_fpa($year);
	$data['esoda'] = $this->eforia_model->esoda_sigkentrotikis($year);
	$data['exoda'] = $this->eforia_model->exoda_sigkentrotikis($year);
	$data['fpa'] = $this->eforia_model->get_dimina($year);
	$this->load->view('sigkentrotikes',$data);
	}	
	
}	
