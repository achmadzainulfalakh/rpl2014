<?php 
$dashboard_users= new dashboard_users; //instanisasi class form

class dashboard_users{
private $db;
function __construct(){
global $database; //mengambil variable atau mendeklarasi ulang variable global
$this->db=$database;
}

function form_add(){
	if($_POST && $_GET['f']=="addusers") {
	$this->add();
	}
else if (!$_POST && $_GET['f']=="addusers"){
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Users</h4>
                            </div>
							<div class="content">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>ID</label>
												<input name="id" type="text" class="form-control" placeholder="Automatic Filled" value="" readonly="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Username</label>
												<input name="username" type="text" class="form-control" placeholder="Username" value="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Password</label>
												<input name="password" type="text" class="form-control" placeholder="Password" value="">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Level</label>
												<input name="level" type="text" class="form-control" placeholder="Level" value="">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-info btn-fill pull-right">Add</button>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
<?php
}
}

function form_edit(){
if($_POST && $_GET['f']=="editusers") {
$this->edit();
}
else if (!empty($_GET['id'])){
foreach ($this->db->get_Users_Where("ID",$_GET['id']) as $value){
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Users</h4>
                            </div>
							<div class="content">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>ID</label>
												<input name="id" type="text" class="form-control" placeholder="ID" value="<?=$value['ID']?>" readonly="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Username</label>
												<input name="username" type="text" class="form-control" placeholder="Username" value="<?=$value['username']?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Password</label>
												<input name="password" type="text" class="form-control" placeholder="Password" value="<?=$value['password']?>">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Level</label>
												<input name="level" type="text" class="form-control" placeholder="Level" value="<?=$value['level']?>">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-warning btn-fill pull-right">Update</button>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
<?php
}
}
}

function form_delete(){
if($_POST && $_GET['f']=="deleteusers") {
$this->delete();
}
else if (!empty($_GET['id'])){
foreach ($this->db->get_Users_Where("ID",$_GET['id']) as $value){
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Delete Users</h4>
								<p class="alert alert-danger">Yakin Menghapus?</p>
                            </div>
							<div class="content">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>ID</label>
												<input name="id" type="text" class="form-control" placeholder="ID" value="<?=$value['ID']?>" readonly="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Username</label>
												<input name="username" type="text" class="form-control" placeholder="Username" value="<?=$value['username']?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Password</label>
												<input name="password" type="text" class="form-control" placeholder="Password" value="<?=$value['password']?>">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Level</label>
												<input name="level" type="text" class="form-control" placeholder="Level" value="<?=$value['level']?>">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-danger btn-fill pull-right">Delete</button>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
<?php
}
}
}

function add(){
$this->db->add_Users(htmlentities($_POST['username']),htmlentities($_POST['password']),htmlentities($_POST['level']));
?>
<div class="alert alert-info">
  <strong>Add!</strong>
</div>
<?php
}

function edit(){
$this->db->set_Users_Where(htmlentities($_POST['id']),"username",htmlentities($_POST['username']));
$this->db->set_Users_Where(htmlentities($_POST['id']),"password",htmlentities($_POST['password']));
$this->db->set_Users_Where(htmlentities($_POST['id']),"level",htmlentities($_POST['level']));
?>
<div class="alert alert-warning">
  <strong>Update!</strong>
</div>
<?php
}

function delete(){
if($_SESSION['username']==htmlentities($_POST['username'])){
?>
<div class="alert alert-danger">
  <strong>Anda sedang login!</strong>
</div>
<?php
} else {
$this->db->del_Users_Where("ID",htmlentities($_POST['id']));
?>
<div class="alert alert-danger">
  <strong>Delete!</strong>
</div>
<?php
}
}

}
