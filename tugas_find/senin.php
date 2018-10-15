<?php
$aa=$_POST["kalimat"];
$bb=$_POST["isi"];
$td="Pencarian tidak ditemukan!";
$ac= explode(" ", $bb);

for($x=0;$x<count($ac);$x++)
{
	if($ac[$x]==$aa)
	{
		echo $ac[$x]="<b>$aa</b>"." ";
	}
	else
	{
		echo $ac[$x]." ";
	}
}
echo "</br></br></br>";
	echo "TEKS BARU</br>";
echo "</br></br></br>";
	$mm = $_POST["replace"];

 $ac = explode(" ",$bb);
 	for($x=0;$x<count($ac);$x++){
	
	if($ac[$x] == $aa){
	echo $ac[$x] = "$mm"." ";
		}
		else 
			{
				echo $ac[$x]." " ;
			}
}
?>