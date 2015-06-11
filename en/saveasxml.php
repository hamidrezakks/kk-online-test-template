<?php

$questionIndex = $_POST["q_index"];
$xmlId = $_POST["xmlid"];

$xml = "<qst><index><type>0</type><items>";
$xml .= "<item><type>0</type>";
$xml .= "<value><![CDATA[";
$xml .= $questionIndex;
$xml .= "]]></value>";
$xml .= "</item>";
$xml .= "</items></index></qst>";

$f = fopen("question".$xmlId.".xml","w");
fwrite($f, $xml);
fclose($f);

echo "done!";

?>