<?php
date_default_timezone_set('Asia/Tehran');
//session_start();
$eventsFile = "usertemp.xml";
if(isset($_POST["datastr"]))
{
	$data = $_POST["datastr"];
	$data = explode("<s>",$data);
	//$f = fopen("log/user".$_SESSION["user"]["id"].".xml","w");
	$f = fopen("log/".$eventsFile,"w");
	fwrite($f, "<qlog>");
	fwrite($f, "<date>");
	$date = date("F d, Y G:i:s");
	fwrite($f, $date);
	fwrite($f, "</date>");
	fwrite($f, "<log>");
	foreach($data as $elem)
	{
		$part = explode("|",$elem);
		$temp = "<item>";
		$temp .= "<nm>".$part[0]."</nm>";
		$temp .= "<md>".$part[1]."</md>";
		$temp .= "<vl>".$part[2]."</vl>";
		$temp .= "</item>";
		echo $temp;
		fwrite($f, $temp);
	}
	fwrite($f, "</log>");
	fwrite($f, "</qlog>");
	fclose($f);
}
?>