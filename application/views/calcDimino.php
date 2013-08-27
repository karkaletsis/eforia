<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Υπολογισμός διμήνου</title>
</head>
<body>
<?php include 'menu.php'; ?>
<div id="container">

<h3>Υπολογισμός Διμήνου</h3>

<form method="POST" name="calcDimino" action="calcDimino">
<table>
<tr>
<td>Δίμηνο</td><td><input name="dimino"></td>
</tr>
<tr>
<td>Έτος</td><td><input name="year"></td>
</tr>
<tr>
<td>
<input type="submit" class="submit button" name="name" value="Υπολογισμός" />
</td>
</tr>
</form>
</table>
<?php
if (!empty($dimino) and !empty($year))
{
echo "<h1>ΤΡΙΜΗΝΟ: " . $dimino . " ΤΟΥ ΕΤΟΥΣ: " . $year . "</h1>";
?>
</div>

<h1>ΕΣΟΔΑ</h1>
<table id="table-3">
<tr>
	<th>ΚΑΘΑΡΟ</th>
	<th>ΜΕ ΦΠΑ</th>
</tr>

<?php
$sum1=0;
$fpa1=0;
foreach ($income as $income_item)
{
	echo "<tr>";
    echo "<td>" . $income_item['poso'] . "</td>";
    echo "<td align='right'>" . number_format($income_item['fpa'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum1=$sum1+$income_item['poso'];
    $fpa1=$fpa1+$income_item['fpa'];
}
?>
</table>

<h1>ΕΞΟΔΑ</h1>
<table id="table-3">
<tr>
	<th>ΚΑΘΑΡΟ</th>
	<th>ΦΠΑ</th>
</tr>
<?php
$sum2=0;
$fpa2=0;
foreach ($outcome as $outcome_item)
{
	echo "<tr>";
    echo "<td>" . $outcome_item['poso1'] . "</td>";
    echo "<td align='right'>" . number_format($outcome_item['fpa1'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum2=$sum2+$outcome_item['poso1'];
    $fpa2=$fpa2+$outcome_item['fpa1'];
}
?>
</table>

<h1>ΕΞΟΔΑ ΧΩΡΙΣ ΦΠΑ</h1>
<table id="table-3">
<tr>
	<th>ΚΑΘΑΡΟ</th>
	<th>ΦΠΑ</th>
</tr>
<?php
$sum3=0;
$fpa3=0;
foreach ($outcome_no_fpa as $outcome_no_fpa_item)
{
	echo "<tr>";
    echo "<td>" . $outcome_no_fpa_item['poso1'] . "</td>";
    echo "<td align='right'>" . number_format($outcome_no_fpa_item['fpa1'], 2, ',', ' ') . "</td>";
    echo "</tr>";
    $sum3=$sum3+$outcome_no_fpa_item['poso1'];
    $fpa3=$fpa3+$outcome_no_fpa_item['fpa1'];
}
?>
</table>


<?php
foreach ($fpa as $fpa_item)
{
$fpa=$fpa_item['fpa'];	
}
?>

<?php
if ($fpa<0) $fpa_pr=$fpa;
if ($fpa>0) $fpa_pr=0;
if ($fpa==0) $fpa_pr=0;

$fpa_new=$fpa1+$fpa_pr-$fpa2;

$fpa_1=$fpa_pr;
$fpa_2=$fpa_new;
?>

<table id="table-3">
<tr>
	<th>ΣΥΝΟΛΙΚΑ ΕΣΟΔΑ</th>
	<th>ΣΥΝΟΛΙΚΟ ΦΠΑ ΕΣΟΔΩΝ</th>
	<th>ΣΥΝΟΛΙΚΑ ΕΞΟΔΑ</th>
	<th>ΣΥΝΟΛΙΚΟ ΦΠΑ ΕΞΟΔΩΝ</th>
	<th>ΦΠΑ ΠΡΟΗΓΟΥΜΕΝΗΣ</th>
	<th>ΦΠΑ1</th>
	<th>ΦΠΑ2</th>
	<th>EΞΟΔΑ ΧΩΡΙΣ ΦΠΑ</th>
</tr>
<tr>
<td><?php echo number_format($sum1, 2, ',', ' '); ?></td>
<td><?php echo number_format($fpa1, 2, ',', ' '); ?></td>
<td><?php echo number_format($sum2, 2, ',', ' '); ?></td>
<td><?php echo number_format($fpa2, 2, ',', ' '); ?></td>
<td><?php echo number_format($fpa, 2, ',', ' '); ?></td>
<td><?php echo number_format($fpa_1, 2, ',', ' '); ?></td>
<td><?php echo number_format($fpa_2, 2, ',', ' '); ?></td>
<td><?php echo number_format($sum3, 2, ',', ' '); ?></td>
</tr>
</table>

<form method="POST" name="storeDimino" action="storeDimino">
<input type="hidden" name="dimino" value="<?php echo $dimino; ?>">
<input type="hidden" name="year" value="<?php echo $year; ?>">
<input type="hidden" name="aa" value="<?php echo $dimino . $year; ?>">
<input type="hidden" name="sum1" value="<?php echo $sum1; ?>">
<input type="hidden" name="fpa1" value="<?php echo $fpa1; ?>">
<input type="hidden" name="sum2" value="<?php echo $sum2; ?>">
<input type="hidden" name="fpa2" value="<?php echo $fpa2; ?>">
<input type="hidden" name="fpa_1" value="<?php echo $fpa_1; ?>">
<input type="hidden" name="fpa_2" value="<?php echo $fpa_2; ?>">
<input type="hidden" name="sum3" value="<?php echo $sum3; ?>">
<input type="submit" value="Υποβολή/Αποθήκευση">
</form>
<?php } ?>
</body>
</html>