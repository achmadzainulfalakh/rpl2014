
<?php global $dashboard ?>
<?php if(empty($dashboard)){
header('Location: http://RPL2014.com/page-not-found.php');
} else {
if($_GET['token']==md5($_SESSION['username'])){
// Menghapus the session
session_destroy();
header('Location: http://RPL2014.com/');
} else {
header('Location: http://RPL2014.com/page-not-found.php');
}

 } ?>
