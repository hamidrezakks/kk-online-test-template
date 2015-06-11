<?php
$type = $_GET["type"];
if($type == "q")
{
	$qnum = $_GET["qnum"];
	$c = file_get_contents("question".$qnum.".xml");
	header("Content-type: text/xml");
	echo $c;
}
?>