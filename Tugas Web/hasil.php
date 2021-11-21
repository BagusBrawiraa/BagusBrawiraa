<?php
$kuis = $_POST['kuis'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_kuis = $kuis *0.3;
$nilai_uts = $uts *0.3;
$nilai_uas = $uas *0.4;

$nilai_rata2=$nilai_kuis+$nilai_uts+$nilai_uas;

if ($nilai_rata2 >=80)
{
	$grade = "A";
}
elseif ($nilai_rata2>=70) 
{
	$grade="B";
}
elseif ($nilai_rata2>=50) 
{
	$grade="C";
}
elseif ($nilai_rata2>=40) 
{
	$grade="D";
}
else
{
	$grade="E";
}
echo 
"<h1>Hitung Nilai Rata-Rata Mahasiswa </h1>
Nilai kuis : <b>$nilai_kuis </b><br>
Nilai uts : <b>$nilai_uts </b><br>
Nilai uas : <b>$nilai_uas </b><br>

<h4>Nilai_rata2 : <b>$nilai_rata2 </b><br><h4/>
<h4> Grade: $grade </h4>";
?>