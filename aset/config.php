<?php
// koneksi ke database
$conn=mysqli_connect('localhost','root','');
$ps=0; 
if (! $conn){
	$ps++;
}

$pilihDB=mysqli_select_db($conn,'dayak');

$kata=$_GET['kata'];
$bahasa=$_GET['bahasa'];

if($ps==0){

	if($bahasa=="indonesia"){
		$cari=mysqli_query($conn,"SELECT * FROM data_kata WHERE indonesia='$kata'");
	} else if($bahasa=="dayak"){
		$cari=mysqli_query($conn,"SELECT * FROM data_kata WHERE dayak='$kata'");
	}

	$jum=mysqli_num_rows($cari);

	if($jum==0){
		print("kata tidak tersedia");
	}else{

		$data=mysqli_fetch_array($cari);

		if($bahasa=="indonesia"){
			print($data['dayak']);
		} else if($bahasa=="dayak"){
			print($data['indonesia']);
		}
	}
}
?>