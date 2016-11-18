<?php global $dashboard ?>
<?php global $dashboard_posts ?>
<?php if(empty($dashboard)){
header('Location: http://RPL2014.com/page-not-found.php');
} else {
?>
<?php $dashboard->head("Posts") ?>
<?php $dashboard->header() ?>
<?php $dashboard->nav() ?>
        <div class="content">
            <div class="container-fluid">
			
			<?php if(!empty($_GET['f']) && $_GET['f'] == "addposts"){ $dashboard_posts->form_add(); } ?>
			<?php if(!empty($_GET['f']) && $_GET['f'] == "editposts"){ $dashboard_posts->form_edit(); } ?>
			<?php if(!empty($_GET['f']) && $_GET['f'] == "deleteposts"){ $dashboard_posts->form_delete(); } ?>
			
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Table Posts <?php $table->generate_add();?></h4>
                                <p class="category">Anda bisa melihat daftar post disini.</p>
                            </div>
							<div class="content">
								<?php
								$table->set_cols(array("ID","post_name","post_status","post_author"));
								$table->set_rows($database->get_Posts());
								$table->generate_table();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $dashboard->footer() ?>
<?php } ?>
