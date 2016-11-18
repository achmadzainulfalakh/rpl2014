<?php
include "../config.php";
include "../database.php";
include "page.php";

global $database;
global $page;

$page->fhead();
$page->fnav();
$page->fheader("home","");

?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <?php
                //content
                foreach ($database->get_Posts() as $value) {
                	echo '<div class="post-preview">';
                    echo '<a href="'.$value['post_link'].'">';
                    echo '<h2 class="post-title">';
                	echo $value['post_title'];
                    echo '</h2>';
                    echo '<h3 class="post-subtitle">';
                    echo $value['post_subtitle'];
                    echo '</h3>';
                    echo '</a>';
                    echo '<p class="post-meta">';
                    echo 'Posted by:'.$value['post_author'].' on '.$value['post_update'];
                    echo '</p>';
                	echo '</div>';
                }
                // end content
                ?>

            </div>
        </div>
    </div>
<?php
$page->ffooter();
$page->ffoot();
// Nama file: home.php
// Lokasi File: RPL2014/blog/home.php