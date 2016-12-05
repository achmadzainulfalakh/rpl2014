<?php global $dashboard ?>
<?php global $dashboard_menu ?>
<?php if(empty($dashboard)){
header('Location: '. base_url . 'page-not-found.php');
} else {
?>
<?php $dashboard->head("Menu") ?>
<?php $dashboard->header() ?>
<?php $dashboard->nav() ?>
        <div class="content">
            <div class="container-fluid">
			
			<?php if(!empty($_GET['f']) && $_GET['f'] == "addmenu"){ $dashboard_menu->form_add(); } ?>
			<?php if(!empty($_GET['f']) && $_GET['f'] == "editmenu"){ $dashboard_menu->form_edit(); } ?>
			<?php if(!empty($_GET['f']) && $_GET['f'] == "deletemenu"){ $dashboard_menu->form_delete(); } ?>
			
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Table Menu <?php $table->generate_add();?></h4>
								<p class="category">Anda bisa mengatur menu yang di tampilkan di halaman depan dari sini.</p>
                            </div>
							<div class="content">
								<?php
								$table->set_cols(array("ID","name","link","order by"));
								$table->set_rows($database->get_Menu());
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
