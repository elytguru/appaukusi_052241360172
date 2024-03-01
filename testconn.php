<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'signupdb';

// create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// check connection
if (mysqli_connect_error()){
    die('database unable to connect:'.mysqli_connect_error())
}
echo 'database connected'

// create database
$sql = 'CREATE DATABASE sighupdb';
if ($conn->query($sql)===TRUE){
    echo 'database created'
}else{
    echo 'database not created:'.$conn->error;
}