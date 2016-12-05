
<?php global $dashboard ?>
<?php if(empty($dashboard)){
header('Location: ' . base_url . 'page-not-found.php');
} else {
if($_GET['token']==md5($_SESSION['username'])){
// Menghapus the session
session_destroy();
header('Location: ' . base_url .'blog');
} else {
header('Location: ' . base_url . 'page-not-found.php');
}

 } ?>
