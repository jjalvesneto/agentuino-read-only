<?php
/*
$time_start = microtime(true);
$reponse = snmpget('192.168.0.180', 'public', "1.3.6.1.2.1.1.8.0",1000000,5);
echo $reponse;
$time_end = microtime(true);
$time = $time_end - $time_start;

echo "Delay in $time secondes\n";

*/

$session = new SNMP(SNMP::VERSION_1, "192.168.0.180", "public");
$sysdescr = $session->get("1.3.6.1.2.1.1.9.0");

echo "HUMIDADE > $sysdescr\n";


?>