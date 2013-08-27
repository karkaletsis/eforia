<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

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
	<?php include 'menu.php'; ?>

<form method="POST" name="sigkentrotikes" action="sigkentrotikes">
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
	
<h3><?php echo $this->input->post('year'); ?></h3>
<h3>ΕΣΟΔΑ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΑΦΜ</th>
	<th>ΠΟΣΟ</th>
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
<h3>ΣΥΝΟΛΙΚΑ ΕΣΟΔΑ:<?php echo number_format($sum, 2, ',', ' '); ?></h3>
<h3>ΕΞΟΔΑ</h3>
<table id="table-3">
<tr>
	<th>ΗΜΕΡΟΜΗΝΙΑ</th>
	<th>ΕΠΩΝΥΜΙΑ</th>
	<th>ΑΦΜ</th>
	<th>ΠΟΣΟ</th>
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

<h3>ΣΥΝΟΛΙΚΑ ΕΞΟΔΑ: <?php echo number_format($sum, 2, ',', ' '); ?></h3>


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
}
?>
</table>


<h3>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ:<?php echo number_format($sum, 2, ',', ' '); ?></h3>

<table id="table-3">
<tr>
	<th>ΠΕΡΙΟΔΟΣ</th>
	<th>ΕΤΟΣ</th>
	<th>ΕΣΟΔΑ</th>
	<th>ΦΠΑ ΕΣ.</th>
	<th>ΕΞΟΔΑ</th>
	<th>ΦΠΑ Εξ.</th>
	<th>ΦΠΑ1</th>
	<th>ΦΠΑ2.</th>
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
    echo "<td align='right'>" . number_format($dimina_item['esoda'], 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($dimina_item['fpa_esoda'], 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($dimina_item['exoda'], 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($dimina_item['fpa_exoda'], 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($dimina_item['fpa1'], 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($dimina_item['fpa2'], 2, ',', ' ') . "</td>";
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
    echo "<td align='right'>" . number_format($sum1, 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($sum2, 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($sum3, 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($sum4, 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($sum2-$sum4, 2, ',', ' ') . "</td>";
    echo "<td align='right'>" . number_format($sum1+$sum2, 2, ',', ' ') . "</td>";
    echo "</tr>";
?>

</table>

</head>
</html>