<?php
class eforia_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('date');		
	}
	
	function formatDate($date1,$format)
{
	$myDate = "";
	if ($date1 != null)
		{
		$date1 = (string) $date1;	
		$time =  strtotime( $date1 );
		$myDate = date( $format, $time );
		}
	return $myDate;
}

	public function get_fpa()
	{
		$sql = "SELECT fpa from fpa";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	
	public function get_income($dimino,$year)
	{
		$dimino2=$dimino*3;
		$dimino1=$dimino2-2;
		$sql = "SELECT Sum(income.total) AS poso, " .
				"Sum(total*fpapercent) AS fpa " .
				" FROM income WHERE (Month(date) between " . $dimino1 . 
				" and " . $dimino2 . ") And (Year(date)=" . $year . ") group by fpapercent";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_outcome($dimino,$year)
	{
		$dimino2=$dimino*3;
		$dimino1=$dimino2-2;
		$sql = "SELECT outcome.amount AS poso1, outcome.fpa AS fpa1, companytype.inDimini " .
				"FROM outcome " .
				"INNER JOIN companies on outcome.companyid=companies.companyid " .
				"INNER JOIN companytype on companies.companytype=companytype.companytype " .
				"WHERE (Month(date) Between " . $dimino1 . 
				" and " . $dimino2 . ")  AND inDimini=1 and (Year(date)=" . $year . ")";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function get_outcome_no_fpa($dimino,$year)
	{
		$dimino2=$dimino*3;
		$dimino1=$dimino2-2;
		$sql = "SELECT outcome.amount AS poso1, outcome.fpa AS fpa1, companytype.inDimini " .
				"FROM outcome " .
				"INNER JOIN companies on outcome.companyid=companies.companyid " .
				"INNER JOIN companytype on companies.companytype=companytype.companytype " .
				"WHERE (Month(date) Between " . $dimino1 . 
				" and " . $dimino2 . ")  AND inDimini=0 and (Year(date)=" . $year . ")";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_year_outcome_no_fpa($year)
	{
		$sql = "SELECT companies.eponimia as eponimia, outcome.date as date, outcome.amount AS poso1, outcome.fpa AS fpa1, " .
				"companytype.companytype as companytype, " .
				"companytype.percentapomeiosi as percentapomeiosi, " .
				"companytype.inDimini " .
				"FROM outcome " .
				"INNER JOIN companies on outcome.companyid=companies.companyid " .
				"INNER JOIN companytype on companies.companytype=companytype.companytype " .
				"WHERE inDimini=0 and (Year(date)=" . $year . ")";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_year_anamorfosi($year)
	{
		$sql = "SELECT companies.eponimia as eponimia, outcome.date as date, outcome.amount AS poso1, outcome.fpa AS fpa1, " .
				"companytype.companytype as companytype, " .
				"companytype.percentapomeiosi as percentapomeiosi, " .
				"companytype.inDimini " .
				"FROM outcome " .
				"INNER JOIN companies on outcome.companyid=companies.companyid " .
				"INNER JOIN companytype on companies.companytype=companytype.companytype " .
				"WHERE companies.companytype=5 and (Year(date)=" . $year . ")";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function get_dimina($year)
	{
		$sql = "SELECT * from dimina " .
				"WHERE year='" . $year . "'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	
	public function dapanes($year)
	{	
		$query = $this->db->query('SELECT Sum(outcome.amount) AS totalAmount, companies.companytype ' .
				'FROM outcome INNER JOIN companies ON outcome.companyid = companies.companyid ' .
				'WHERE Year(date)=' . $year . ' GROUP BY companies.companytype');
		return $query->result_array();
	}
	
	public function esoda($year)
	{
		$query = $this->db->query('SELECT YEAR(date) AS year, sum(income.total) as totalAmount ' .
				'FROM income WHERE Year(date)=' . $year . ' GROUP BY Year(date)');
		return $query->result_array();	
	}
	
	public function esoda_sigkentrotikis($year)
	{
		$query = $this->db->query('SELECT date, income.total as totalAmount, customers.eponimia,customers.afm FROM income ' .
				'inner join customers on customers.customerid = income.customerid ' .
				'WHERE Year(date)=' . $year . ' and income.total>300');
		return $query->result_array();	
	}

	public function esoda_sigkentrotikis_alla($year)
	{
		$query = $this->db->query('SELECT date, income.total as totalAmount, customers.eponimia,customers.afm FROM income ' .
				'inner join customers on customers.customerid = income.customerid ' .
				'WHERE Year(date)=' . $year . ' and income.total<=300');
		return $query->result_array();
	}
	
	
	public function exoda_sigkentrotikis($year)
	{
		$query = $this->db->query('SELECT date, outcome.amount as totalAmount, companies.eponimia, companies.afm FROM outcome ' .
				'inner join companies on companies.companyid = outcome.companyid ' .
				'WHERE Year(date)=' . $year . ' and outcome.amount>300');
		return $query->result_array();	
	}	
	
	public function exoda_sigkentrotikis_alla($year)
	{
		$query = $this->db->query('SELECT date, outcome.amount as totalAmount, companies.eponimia, companies.afm FROM outcome ' .
				'inner join companies on companies.companyid = outcome.companyid ' .
				'WHERE Year(date)=' . $year . ' and outcome.amount<=300');
		return $query->result_array();
	}
		public function esoda_sigkentrotikis_fpa($year)
	{
		$query = $this->db->query('SELECT date, income.total as totalAmount, customers.eponimia,customers.afm FROM income ' .
				'inner join customers on customers.customerid = income.customerid ' .
				'WHERE Year(date)=' . $year);
		return $query->result_array();	
	}
	
		public function exoda_sigkentrotikis_fpa($year)
	{
		$query = $this->db->query('SELECT date, outcome.amount as totalAmount, companies.eponimia, companies.afm FROM outcome ' .
				'inner join companies on companies.companyid = outcome.companyid ' .
				'WHERE Year(date)=' . $year);
		return $query->result_array();	
	}	
	
	public function store_dimino($aa,$dimino,$year,$esoda,$fpa_esoda,$exoda,$fpa_exoda,$fpa1,$fpa2,$fpa)
	{
		$this->db->trans_start();
		$data = array(
   			'aa' => $aa,
   			'dimino' => $dimino,
   			'year' => $year,
   			'esoda' => $esoda,
   			'fpa_esoda' => $fpa_esoda,
   			'exoda' => $exoda,
   			'fpa_exoda' => $fpa_exoda,
   			'fpa1' => $fpa1,
   			'fpa2' => $fpa2
   			);
		$this->db->insert('dimina', $data);
		
		$data1 = array(
               'fpa' => $fpa
            );
        $this->db->update('fpa', $data1); 
        $this->db->trans_complete();
            
		 
	}
	
}
?>