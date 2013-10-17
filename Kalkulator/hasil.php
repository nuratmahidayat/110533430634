<center>
<p>&nbsp;</p>
<?php
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
$operator =$_POST['operator'];

if ($operator == '+'){
	$hasil = $bil1+$bil2;
}
if ($operator == '-'){
	$hasil = $bil1-$bil2;
}
if ($operator == '*'){
	$hasil = $bil1*$bil2;
}
if ($operator == '/'){
	$hasil = $bil1/$bil2;
}
print "<table border='2' bordercolor='#00ffff' width='10%' height='5%'><tr><td><center>
$bil1 $operator $bil2 = $hasil</center><td></tr><table>";
?>
</center>
<html>
<style type="text/css">

</style>
<body>
<center>
<p>&nbsp;</p>
<a href="index1.html" title="silahkan hitung lagi"><strong>:: Back ::</strong></a>
</center>
</body>

