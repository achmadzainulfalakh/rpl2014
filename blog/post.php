<?php
include "../config.php";
include "page.php";
include "../database.php";
$database =new database("localhost","root","","rpl2014");
$page=new page;
error_reporting(0);
if(!$post=mysqli_fetch_array($database->get_Post(htmlentities($_GET['p'])))){
header('Location: http://RPL2014.com/page-not-found.php');
}

$page->fhead($post['post_title']);
$page->fnav();
$page->fheader($post['post_title'] ,$post['post_subtitle']);

?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <?php
                //content
                	echo '<div class="post-preview">';
                	echo $post['post_content'];
                	echo '</div>';
                // end content
                ?>

            </div>
        </div>
    </div>
<?php
$page->ffooter();
$page->ffoot();

// Nama file: post.php
// Lokasi File: RPL2014/blog/post.php