<?php
$connect = mysqli_connect('localhost', 'root', '', 'restpi');

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
