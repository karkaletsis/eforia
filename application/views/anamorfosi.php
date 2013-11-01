<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Αναμόρφωση</title>
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
<form method="POST" name="anamorfosi" action="anamorfosi">
<table>
<tr>
<td>Έτος</td><td><input name="year"></td>
</tr>
<tr>
<td>
<input type="submit" class="submit button" name="name" value="Υπολογισμός" />
</td>
</tr>
</table>
</form>

<h3>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΠΟΣΟ</th>
	<th>ΠΟΣΟΣΤΟ</th>
	<th>ΜΕΙΟΥΜΕΝΟ</th>
</tr>

<?php
$sum=0;
$sum_meioumeno1=0;
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
    $sum_meioumeno1=$sum_meioumeno1+$transaction_item['poso1']*(100-$transaction_item['percentapomeiosi'])/100;
}
?>
</table>

<h3>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ:<?php echo number_format($sum, 2, ',', ' '); ?></h3>
<h3>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ (MEIOYMENO):<?php echo number_format($sum_meioumeno1, 2, ',', ' '); ?></h3>

<h3>ΑΝΑΜΟΡΦΩΣΗ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΠΟΣΟ</th>
	<th>ΠΟΣΟΣΤΟ</th>
	<th>ΜΕΙΟΥΜΕΝΟ</th>
</tr>

<?php
$sum=0;
$sum_meioumeno2=0;
foreach ($anamorfosi as $transaction_item)
{
	echo "<tr>";
    echo "<td>" . $this->eforia_model->formatDate($transaction_item['date'],"d-m-Y") . "</td>";
    echo "<td>" . $transaction_item['eponimia'] . "</td>";
    echo "<td>" . number_format($transaction_item['poso1'], 2, ',', ' ') . "</td>";
    echo "<td>" . number_format($transaction_item['percentapomeiosi'], 2, ',', ' ') . "</td>";
    echo "<td>" . number_format($transaction_item['poso1']*(100-$transaction_item['percentapomeiosi'])/100, 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$transaction_item['poso1'];
    $sum_meioumeno2=$sum_meioumeno2+$transaction_item['poso1']*(100-$transaction_item['percentapomeiosi'])/100; 
}
?>
</table>
<?php
$sum_meioumeno_total=0;
$sum_meioumeno_total=$sum_meioumeno1+$sum_meioumeno2;
?>
<h3>ΑΝΑΜΟΡΦΩΣΗ:<?php echo number_format($sum, 2, ',', ' '); ?></h3>
<h3>ΑΝΑΜΟΡΦΩΣΗ (MEIOYMENO):<?php echo number_format($sum_meioumeno2, 2, ',', ' '); ?></h3>
<h3>ΣΥΝΟΛΙΚΟ (MEIOYMENO):<?php echo number_format($sum_meioumeno_total, 2, ',', ' '); ?></h3>
</div>
</head>
</html>
