<?php
$allowedIPs = file('allowed_ips.txt', FILE_IGNORE_NEW_LINES);
$userIP = $_SERVER['REMOTE_ADDR'];

if (in_array($userIP, $allowedIPs)) {
    include 'x.php';
} else {
    include 'y.php';
}
?>

