<?php
$userName = $_GET['username'];
echo $userName;
$userFilePath = "/var/www/html/monsite-cloud/users";
$output1 = exec('htpasswd -b ' . $userFilePath . ' ' . $userName . ' ' . $userName);
$output2 = exec('mkdir ' .'public_html/' . $userName);
var_dump('htpasswd -b ' . $path . ' ' . $userName . ' ' . $userName);
var_dump($output2);
