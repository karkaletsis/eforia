<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ΣΥΓΚΕΝΤΡΩΤΙΚΕΣ-ΕΚΚΑΘΑΡΙΣΤΙΚΕΣ-ΦΟΡΟΛΟΓΙΚΗ ΑΝΑΜΟΡΦΩΣΗ</title>
	
<h1>Παρακολούθηση Βιβλίων Β' Κατηγορίας</h1>
	
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>

</head>
<body>
<div class="leftNav">       
<?php include 'menu.php'; ?>
</div>
<div class="topPanel">   
<form method="POST" name="sigkentrotikes" action="sigkentrotikes">
<table>
<tr>
<td><b>Έτος</b></td><td><input name="year"></td>
</tr>
<tr>
<td>
<input type="submit" class="submit button" name="name" value="Υπολογισμός" />
</td>
</tr>
</table>
</form>
<hr><hr>	
<h2>ΕΤΟΣ: <?php echo $this->input->post('year'); ?></h2>
<hr><hr>
<h2>ΣΥΓΚΕΝΤΡΩΤΙΚΗ ΚΑΤΑΣΤΑΣΗ ΠΕΛΑΤΩΝ-ΠΡΟΜΗΘΕΥΤΩΝ</h2>
<h3>ΠΕΛΑΤΕΣ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΑΦΜ</th>
	<th><p align='right'> ΠΟΣΟ ΧΩΡΙΣ ΦΠΑ</th>
</tr>

<?php
$sum=0;
foreach ($esoda as $transaction_item)
{
	echo "<tr>";
    echo "<td>" . $this->eforia_model->formatDate($transaction_item['date'],"d-m-Y") . "</td>";
    echo "<td>" . $transaction_item['eponimia'] . "</td>";
    echo "<td>" . $transaction_item['afm'] . "</td>";
    echo "<td align='right'>" . number_format($transaction_item['totalAmount'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$transaction_item['totalAmount'];
}
?>
</table>
<h3>Γενικό σύνολο αξίας πωλήσεων: <?php echo number_format($sum, 2, ',', ' '); ?></h3>

<h3>ΠΕΛΑΤΕΣ ΑΛΛΑ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΑΦΜ</th>
	<th><p align='right'> ΠΟΣΟ ΧΩΡΙΣ ΦΠΑ</th>
</tr>

<?php
$sum=0;
foreach ($esoda_other as $transaction_item)
{
	echo "<tr>";
    echo "<td>" . $this->eforia_model->formatDate($transaction_item['date'],"d-m-Y") . "</td>";
    echo "<td>" . $transaction_item['eponimia'] . "</td>";
    echo "<td>" . $transaction_item['afm'] . "</td>";
    echo "<td align='right'>" . number_format($transaction_item['totalAmount'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$transaction_item['totalAmount'];
}
?>
</table>
<h3>Γενικό σύνολο αξίας πωλήσεων που δεν μπαίνουν στην συγκεντρωτική: <?php echo number_format($sum, 2, ',', ' '); ?></h3>

<h3>ΠΡΟΜΗΘΕΥΤΕΣ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΑΦΜ</th>
	<th><p align='right'> ΠΟΣΟ ΧΩΡΙΣ ΦΠΑ</th>
</tr>


<?php
$sum=0;
foreach ($exoda as $transaction_item)
{
	echo "<tr>";
    echo "<td>" . $this->eforia_model->formatDate($transaction_item['date'],"d-m-Y") . "</td>";
    echo "<td>" . $transaction_item['eponimia'] . "</td>";
    echo "<td>" . $transaction_item['afm'] . "</td>";
    echo "<td align='right'>" . number_format($transaction_item['totalAmount'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$transaction_item['totalAmount'];
}
?>
</table>

<h3>Γενικό σύνολο αξίας αγορών: <?php echo number_format($sum, 2, ',', ' '); ?></h3>

<h3>ΠΡΟΜΗΘΕΥΤΕΣ ΑΛΛΑ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΑΦΜ</th>
	<th><p align='right'> ΠΟΣΟ ΧΩΡΙΣ ΦΠΑ</th>
</tr>


<?php
$sum=0;
foreach ($exoda_other as $transaction_item)
{
	echo "<tr>";
    echo "<td>" . $this->eforia_model->formatDate($transaction_item['date'],"d-m-Y") . "</td>";
    echo "<td>" . $transaction_item['eponimia'] . "</td>";
    echo "<td>" . $transaction_item['afm'] . "</td>";
    echo "<td align='right'>" . number_format($transaction_item['totalAmount'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$transaction_item['totalAmount'];
}
?>
</table>

<h3>Γενικό σύνολο αξίας αγορών που δεν μπαίνουν στην συγκεντρωτική: <?php echo number_format($sum, 2, ',', ' '); ?></h3>



<hr><hr>
<h2><p>ΕΚΚΑΘΑΡΙΣΤΙΚΗ Φ.Π.Α.</h2>
<h3>ΕΣΟΔΑ - ΕΞΟΔΑ</h3>
<table id="table-3">
<tr>

	<th>ΠΕΡΙΟΔΟΣ</th>
	<th>ΕΤΟΣ</th>
	<th>ΕΣΟΔΑ ΧΩΡΙΣ ΦΠΑ (603)</th>
	<th>ΦΠΑ ΕΣΟΔΩΝ (633,710)</th>
	<th>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ (663)</th>
	<th>ΦΠΑ ΕΞΟΔΩΝ (683)</th>
	<th>ΦΠΑ ΠΛΗΡΩΤΕΟΣ (701)</th>
	<th>ΕΣΟΔΑ ΜΕ ΦΠΑ</th>
</tr>


<?php
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;
$sum5=0;
$sum6=0;
foreach ($fpa as $dimina_item)
{
	echo "<tr>";
    echo "<td>" . $dimina_item['dimino'] . "</td>";
    echo "<td>" . $dimina_item['year'] . "</td>";
    echo "<td align='center'>" . number_format($dimina_item['esoda'], 2, ',', ' ') . "</td>";
    echo "<td align='center'>" . number_format($dimina_item['fpa_esoda'], 2, ',', ' ') . "</td>";
    echo "<td align='center'>" . number_format($dimina_item['exoda'], 2, ',', ' ') . "</td>";
    echo "<td align='center'>" . number_format($dimina_item['fpa_exoda'], 2, ',', ' ') . "</td>";
    echo "<td align='center'>" . number_format($dimina_item['fpa1'], 2, ',', ' ') . "</td>";
    echo "<td align='center'>" . number_format($dimina_item['fpa2'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum1=$sum1+$dimina_item['esoda'];
    $sum2=$sum2+$dimina_item['fpa_esoda'];
    $sum3=$sum3+$dimina_item['exoda'];
    $sum4=$sum4+$dimina_item['fpa_exoda'];
    $sum5=$sum5+$dimina_item['fpa1'];
    $sum6=$sum6+$dimina_item['fpa2'];
}
?>
<?php
	echo "<tr>";
    echo "<td>ΣΥΝΟΛΙΚΑ</td>";
    echo "<td>&nbsp;</td>";
	echo "<td align='center'><b>" . number_format($sum1, 2, ',', ' ') . "</b></td>";
    echo "<td align='center'><b>" . number_format($sum2, 2, ',', ' ') . "</b></td>";
    echo "<td align='center'><b>" . number_format($sum3, 2, ',', ' ') . "</b></td>";
    echo "<td align='center'><b>" . number_format($sum4, 2, ',', ' ') . "</b></td>";
    echo "<td align='center'><b>" . number_format($sum2-$sum4, 2, ',', ' ') . "</b></td>";
    echo "<td align='center'><b>" . number_format($sum1+$sum2, 2, ',', ' ') . "</b></td>";
    echo "</tr>";
?>

</table>
<hr><hr>
<h2>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ</h2>
<h3>ΕΞΟΔΑ ΧΩΡΙΣ ΔΙΚΑΙΩΜΑ ΕΚΠΤΩΣΗΣ ΦΠΑ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΠΟΣΟ ΜΕ ΦΠΑ</th>
	<th>ΠΟΣΟΣΤΟ ΑΠΟΜΕΙΩΣΗΣ</th>
	<th>ΠΟΣΟ ΜΕΙΩΣΗΣ</th>
</tr>

<?php
$sum=0;
$sum_apomeiosi=0;
foreach ($exoda_xoris_fpa as $transaction_item)
{
	 echo "<tr>";
     echo "<td>" . $this->eforia_model->formatDate($transaction_item['date'],"d-m-Y") . "</td>";
     echo "<td>" . $transaction_item['eponimia'] . "</td>";
     echo "<td>" . number_format($transaction_item['poso1'], 2, ',', ' ') . "</td>";
     echo "<td>" . number_format($transaction_item['percentapomeiosi'], 2, ',', ' ') . "</td>";
     echo "<td>" . number_format($transaction_item['poso1']*(100-$transaction_item['percentapomeiosi'])/100, 2, ',', ' ') . "</td>";
     echo "</tr>";
     $sum=$sum+$transaction_item['poso1'];
     $sum_apomeiosi=$sum_apomeiosi+$transaction_item['poso1']*(100-$transaction_item['percentapomeiosi'])/100;
    
}
?>
</table>


<h3>ΣΥΝΟΛΟ ΕΞΟΔΩΝ ΧΩΡΙΣ ΔΙΚΑΙΩΜΑ ΕΚΠΤΩΣΗΣ ΦΠΑ:<?php echo number_format($sum, 2, ',', ' '); ?></h3>
<h3>ΑΠΟΜΕΙΩΣΗ:<?php echo number_format($sum_apomeiosi, 2, ',', ' '); ?></h3>
<br>
</div>


</head>
</html>
