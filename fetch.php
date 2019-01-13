<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/git/web/remoroboinclude/globals.php');
include('excecute.php');
$resultArray=array();
$arrayItem=array();

$select_query = "SELECT * FROM `notification` WHERE `dismiss` = 0    ORDER BY `notification`.`date` DESC";

$result = DB_query($select_query);

$resultCount =  count($result);

//array_push($resultArray,$arrayItem);
for ($i=0;$i<$resultCount ;$i++)
{
//$arrayItem["index"]=$i;
$arrayItem["notification_id"] = $result[$i][0];
$arrayItem["notification_subject"] = $result[$i][1];
$arrayItem["notification_source"] = $result[$i][2];
$arrayItem["notification_text"] = $result[$i][3];
$arrayItem["notification_date"] = $result[$i][4];
$arrayItem["notification_dismiss"] = $result[$i][5];  
$arrayItem["notification_level"] = $result[$i][6];
$arrayItem["fulldetails"] = $result[$i][7];
$resultArray[$i] = $arrayItem;
}
//$subject = $result[1];
?>