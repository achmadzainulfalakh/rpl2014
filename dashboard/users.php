<?php global $dashboard ?>
<?php global $dashboard_users ?>
<?php if(empty($dashboard)){
header('Location: http://RPL2014.com/page-not-found.php');
} else {
?>
<?php $dashboard->head("Users") ?>
<?php $dashboard->header() ?>
<?php $dashboard->nav() ?>
        <div class="content">
            <div class="container-fluid">
			
			<?php if(!empty($_GET['f']) && $_GET['f'] == "addusers"){ $dashboard_users->form_add(); } ?>
			<?php if(!empty($_GET['f']) && $_GET['f'] == "editusers"){ $dashboard_users->form_edit(); } ?>
			<?php if(!empty($_GET['f']) && $_GET['f'] == "deleteusers"){ $dashboard_users->form_delete(); } ?>
			
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Table Users <?php $table->generate_add();?></h4>
                                <p class="category">Anda bisa mengatur user di halaman ini.</p>
                            </div>
							<div class="content">
								<?php
								$table->set_cols(array("ID","username","password","level"));
								$table->set_rows($database->get_Users());
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
