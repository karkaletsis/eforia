<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Παρακολούθηση Βιβλίων Β' Κατηγορίας</title>

<link rel="styleSheet" HREF="<?php echo base_url() . "assets/css/ajax.css"; ?>" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/layout.css"; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/justifiable/default.css"; ?>" />

<?php
if (!$this->ion_auth->logged_in())
{
    redirect('auth/login');
}
?>
<ul>
<li><a href='<?php echo site_url('datatables/fpa_management')?>'>ΦΠΑ Προηγούμενης</a></li>
<li><a href='<?php echo site_url('datatables/dimina_2001_management')?>'>Δίμηνα έως 2001 (σε δρχ)</a></li>
<li><a href='<?php echo site_url('datatables/alla_esoda_management')?>'>Άλλα έσοδα</a></li>
<li><a href='<?php echo site_url('datatables/customers_management')?>'>Πελάτες</a></li>
<li><a href='<?php echo site_url('datatables/companytype_management')?>'>Είδος Πελάτη</a></li>
<li><a href='<?php echo site_url('datatables/companies_management')?>'>Προμηθευτές</a></li>
<li><a href='<?php echo site_url('datatables/contracts_management')?>'>Συμβάσεις</a></li>
<li><a href='<?php echo site_url('datatables/income_management')?>'>Έσοδα</a></li>
<li><a href='<?php echo site_url('datatables/outcome_management')?>'>Έξοδα</a></li>
<li><a href='<?php echo site_url('datatables/dimina_management')?>'>Περιοδικές</a></li>
<li><a href='<?php echo site_url('dimina/calc')?>'>Υπολογισμός περιοδικής ΦΠΑ</a></li>
<li><a href='<?php echo site_url('queries/sigkentrotikes')?>'>Συγκεντρωτικές</a></li>
<li><a href='<?php echo site_url('queries/anamorfosi')?>'>Αναμόρφωση</a></li>
<li><a href='<?php echo site_url('queries/dapanes')?>'>Ε3</a></li>
</ul>
<ul>
<li><a href='<?php echo site_url('auth/change_password')?>'>Αλλαγή Κωδικού</a></li>
<li><a href='<?php echo site_url('auth/logout')?>'>Αποσύνδεση</a></li>
</ul>

</head>
</html>