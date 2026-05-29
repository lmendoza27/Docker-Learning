<?php

$host = "192.168.50.71";
$port = 1433;

$socket = @fsockopen($host, $port, $errno, $errstr, 5);

if (!$socket) {
    echo "NO SOCKET: $errstr ($errno)";
} else {
    echo "SOCKET OK";
}
