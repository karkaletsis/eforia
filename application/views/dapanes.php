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

<div class="leftNav">       
<?php include 'menu.php'; ?>
</div>
<div class="topPanel"> 
<form method="POST" name="dapanes" action="dapanes">
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
	
<h1>ΔΑΠΑΝΕΣ ΚΑΙ ΕΣΟΔΑ ΓΙΑ ΤΟ ΕΤΟΣ: <?php echo $this->input->post('year'); ?></h1>
<h1>ΕΞΟΔΑ</h1>
<table id="table-3">
<tr>
	<th>EΙΔΟΣ</th>
	<th>ΠΟΣΟ</th>
</tr>

<?php
$sum=0;
$sum_loipa=0;
$sum_kanonika=0;
foreach ($dapanes as $transaction_item)
{
	echo "<tr>";
    echo "<td>" . $transaction_item['companytype'] . "</td>";
    echo "<td align='right'>" . number_format($transaction_item['totalAmount'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$transaction_item['totalAmount'];
    if ($transaction_item['companytype']=='1') $sum_kanonika=$sum_kanonika + $transaction_item['totalAmount'];
    if ($transaction_item['companytype']<>'1') $sum_loipa=$sum_loipa + $transaction_item['totalAmount']; 
}
?>
</table>
<h3>ΣΥΝΟΛΙΚΑ ΕΞΟΔΑ: <?php echo number_format($sum, 2, ',', ' '); ?></h3>
<h3>KANONIKA ΕΞΟΔΑ: <?php echo number_format($sum_kanonika, 2, ',', ' '); ?></h3>
<h3>ΛΟΙΠΑ ΕΞΟΔΑ: <?php echo number_format($sum_loipa, 2, ',', ' '); ?></h3>

<h1>ΕΣΟΔΑ</h1>
<table id="table-3">
<tr>
	<th>ΕΤΟΣ</th>
	<th>ΠΟΣΟ</th>
</tr>
<?php
$sum=0;
foreach ($esoda as $esoda_item)
{
	echo "<tr>";
    echo "<td>" . $esoda_item['year'] . "</td>";
    echo "<td align='right'>" . number_format($esoda_item['totalAmount'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum=$sum+$esoda_item['totalAmount'];
}
?>
</table>
<h3>ΣΥΝΟΛΙΚΑ ΕΣΟΔΑ: <?php echo number_format($sum, 2, ',', ' '); ?></h3>
</div>
</head>
</html>
