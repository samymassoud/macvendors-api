<?php 
include "src/MacvendorsApi.php";
use \macvendors_co;

$api = new \macvendors_co\MacVendorsApi();
/**
Get And parse data to array

**/
$vendor = $api->get_vendor ("08:74:02:00:00:00",'csv');
echo $vendor['company'].'<br/>';
echo $vendor['mac_prefix'].'<br/>';
echo $vendor['address'];

//Get raw data XML
$vendor = $api->get_vendor_xml("08:74:02:00:00:00");
echo '<pre>'.$vendor.'</pre>' ;
//Get raw data CSV
$vendor = $api->get_vendor_csv("08:74:02:00:00:00");
echo '<pre>'.$vendor.'</pre>' ;
//Get Raw data JSON
$vendor = $api->get_vendor_json("08:74:02:00:00:00");
echo '<pre>'.$vendor.'</pre>' ;
//get raw data PIPE
$vendor = $api->get_vendor_pipe("08:74:02:00:00:00");
echo '<pre>'.$vendor.'</pre>' ;
