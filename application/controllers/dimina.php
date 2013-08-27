<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dimina extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eforia_model');
	}
	
	public function index()
	{
	}

	public function calc()
	{
	$this->load->helper('form');
	$this->load->view('calcDimino');	
	}
	
	public function calcDimino()
	{
	$this->load->helper('form');
	$dimino = $this->input->post('dimino');	
	$year = $this->input->post('year');

	$data['dimino']=$dimino;
	$data['year']=$year;
	$data['income'] = $this->eforia_model->get_income($dimino,$year);
	$data['outcome'] = $this->eforia_model->get_outcome($dimino,$year);
	$data['outcome_no_fpa'] = $this->eforia_model->get_outcome_no_fpa($dimino,$year);
	$data['fpa'] = $this->eforia_model->get_fpa();
	$this->load->view('calcDimino',$data);
	}
	
	public function storeDimino()
	{
	$this->load->helper('form');
	$dimino = $this->input->post('dimino');	
	$year = $this->input->post('year');
	$aa = $this->input->post('aa');
	
	$esoda = $this->input->post('sum1');
	$esoda_fpa = $this->input->post('fpa1');
	$exoda = $this->input->post('sum2');
	$exoda_fpa = $this->input->post('fpa2');
	$fpa_1 = $this->input->post('fpa_1');
	$fpa_2 = $this->input->post('fpa_2');
	$fpa = $this->input->post('fpa_2');
	$this->eforia_model->store_dimino($aa,$dimino,$year,$esoda,$esoda_fpa,$exoda,$exoda_fpa,$fpa_1,$fpa_2,$fpa);
	
	$data['dimino']=$dimino;
	$data['year']=$year;
	$data['income'] = $this->eforia_model->get_income($dimino,$year);
	$data['outcome'] = $this->eforia_model->get_outcome($dimino,$year);
	$data['outcome_no_fpa'] = $this->eforia_model->get_outcome_no_fpa($dimino,$year);
	$data['fpa'] = $this->eforia_model->get_fpa();
	$this->load->view('calcDimino',$data);
	}
	
}	
//	Option Compare Database

//Private Sub Command4_Click()
//    Dim MyDb As Database, k As DAO.Recordset, f As DAO.Recordset, q1 As DAO.Recordset, q2 As DAO.Recordset
//    Dim fpa_pr As Single
//    Set MyDb = CurrentDb()
//    Set k = MyDb.OpenRecordset("DIMINA")
//    Set f = MyDb.OpenRecordset("FPA")
//    Dim count_esoda As Integer
//    
//    Dim dimino1, dimino2 As Integer
//    Dim fpa1, fpa2 As Single
//        count_esoda = 1
//        dimino1 = Me.dimino * 3
//        dimino2 = dimino1 - 2
//        Set q2 = MyDb.OpenRecordset("SELECT Sum(ÅÓÏÄÁ.[ÓÕÍÏËÉÊÏ ÐÏÓÏ]) AS poso2, Sum([ÓÕÍÏËÉÊÏ ÐÏÓÏ]*[ÐÏÓÏÓÔÏ ÖÐÁ]) AS fpa2, ([ÐÏÓÏÓÔÏ ÖÐÁ]) AS poso21 FROM ÅÓÏÄÁ WHERE (Month([ÇÌÅÑÏÌÇÍÉÁ]) between " & dimino1 & " and " & dimino2 & ") And (Year([ÇÌÅÑÏÌÇÍÉÁ])=" & Me.year & ") GROUP BY [ÐÏÓÏÓÔÏ ÖÐÁ]")
//        
//        'q2.MoveLast
//        count_esoda = q2.RecordCount
//        'q2.MoveFirst
//        
//        Set q1 = MyDb.OpenRecordset("SELECT Sum(ÅÎÏÄÁ.[ÓÕÍÏËÉÊÏ ÐÏÓÏ]) AS poso1, Sum(ÅÎÏÄÁ.ÖÐÁ) AS fpa1 FROM ÅÎÏÄÁ WHERE (Month([ÇÌÅÑÏÌÇÍÉÁ]) Between " & dimino1 & " and " & dimino2 & ")  AND (Year([ÇÌÅÑÏÌÇÍÉÁ])=" & Me.year & ")")
//
//        k.AddNew
//        k![AA] = LTrim(Str(Me.dimino)) & LTrim(Str(Me.year))
//        k![DIMINO] = Me.dimino
//        k![YEAR] = Me.year
//        
//        For j = 1 To count_esoda
//            If q2![fpa2] <> 0 Then
//                If Not IsNull(q2![poso2]) Then
//                    k![ESODA] = q2![poso2]
//                    k![FPA_ESODA] = (q2![fpa2])
//                    fpa2 = (q2![fpa2])
//                Else
//                    fpa2 = 0
//                End If
//             Else
//                k![ESODA_XORIS_FPA] = q2![poso2]
//            End If
//            q2.MoveNext
//         Next j
//        
//        If Not IsNull(q1![poso1]) Then k![EXODA] = q1![poso1]
//        If Not IsNull(q1![fpa1]) Then
//            k![FPA_EXODA] = q1![fpa1]
//            fpa1 = q1![fpa1]
//        Else
//            fpa1 = 0
//        End If
//            
//        f.Edit
//        'f.MoveLast
//        If f![FPA] < 0 Then fpa_pr = f![FPA]
//        If f![FPA] > 0 Then fpa_pr = 0
//        If f![FPA] = 0 Then fpa_pr = 0
//        'f.AddNew
//    
//        'f![AA] = LTrim(Str(Me.dimino)) & LTrim(Str(Me.year))
//        f![FPA] = fpa2 + fpa_pr - fpa1
//        
//        k![FPA1] = fpa_pr
//        k![FPA2] = fpa2 + fpa_pr - fpa1
//        k.Update
//        k.Close
//        
//        f.Update
//        f.Close
//        q1.Close
//        q2.Close
//    
//        MyDb.Close
//End Sub
//	}
//	
//	
