<?php 
 $files = scandir('./data/');

$param = $_GET["page_content"];
$param = str_replace(' ','+',$param);
$param = base64_decode($param);
// $param = utf8_decode($param);
// $param = urldecode($param);


 file_put_contents( "./data/pages_content.txt", $param, FILE_APPEND );

?>