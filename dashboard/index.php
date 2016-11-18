<?php
// Start the session
session_start();

include "../database.php"; //memanggil database
include "../vLogin.php"; //memanggil vlogin
include "../config.php"; //memanggil config
include "class_dashboard.php"; //memanggil class dashboard
include "class_table.php"; //memanggil class table
include "class_dashboard_menu.php"; //memanggil class menu
include "class_dashboard_users.php"; //memanggil class users
include "class_dashboard_posts.php"; //memanggil class users


if(!empty($_SESSION["username"]) && !empty($_GET["p"])){

global $database; //mengambil variable atau mendeklarasi ulang variable global
global $vLogin;	//mengambil variable atau mendeklarasi ulang variable global

$vLogin->cek_login($_SESSION['username'],$_SESSION['password']);
include $_GET["p"].".php";

} else {
header('Location: http://RPL2014.com/page-not-found.php');
}
// Nama file: index.php
// Lokasi File: RPL2014/dashboard/index.php