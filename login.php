<?php

//modularitas atau modularisasi
include "database.php"; //memanggil database
include "vLogin.php"; //memanggil vlogin
include "config.php";

global $database;
global $vLogin;

// Start the session
session_start();

if(empty($_SESSION["username"])){
$database->connect();
$vLogin->index(); //menjalankan metode index dari vlogin
} else {
header('Location: http://rpl2014.com/dashboard/?p=dashboard');
}

if($_POST){
$vLogin->cek_akun("http://rpl2014.com/dashboard/?p=dashboard",$_POST['username'],$_POST['password']);
}

// Nama file: login.php
// Lokasi File: RPL2014/login.php