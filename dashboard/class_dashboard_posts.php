<?php 
$dashboard_posts= new dashboard_posts; //instanisasi class form

class dashboard_posts{
private $db;
function __construct(){
global $database; //mengambil variable atau mendeklarasi ulang variable global
$this->db=$database;
}

function form_add(){
	if($_POST && $_GET['f']=="addposts") {
	$this->add();
	}
else if (!$_POST && $_GET['f']=="addposts"){
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Posts</h4>
                            </div>
							<div class="content">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>ID</label>
												<input name="id" type="text" class="form-control" placeholder="automatic filled" value="" disabled="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Name</label>
												<input name="name" type="text" class="form-control" placeholder="Name" value="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Link</label>
												<input name="link" type="text" class="form-control" placeholder="Link" value="">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Order By</label>
												<input name="orderby" type="number" class="form-control" placeholder="Order By" value="">
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
if($_POST && $_GET['f']=="editposts") {
$this->edit();
}
else if (!empty($_GET['id'])){
foreach ($this->db->get_Posts_Where("ID",$_GET['id']) as $value){
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Posts</h4>
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
												<label>Name</label>
												<input name="name" type="text" class="form-control" placeholder="Name" value="<?=$value['name']?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Link</label>
												<input name="link" type="text" class="form-control" placeholder="Link" value="<?=$value['link']?>">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Order By</label>
												<input name="orderby" type="number" class="form-control" placeholder="Order By" value="<?=$value['order by']?>">
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
if($_POST && $_GET['f']=="deleteposts") {
$this->delete();
}
else if (!empty($_GET['id'])){
foreach ($this->db->get_Posts_Where("ID",$_GET['id']) as $value){
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Delete Posts</h4>
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
												<label>Name</label>
												<input name="name" type="text" class="form-control" placeholder="Name" value="<?=$value['name']?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Link</label>
												<input name="link" type="text" class="form-control" placeholder="Link" value="<?=$value['link']?>">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Order By</label>
												<input name="orderby" type="number" class="form-control" placeholder="Order By" value="<?=$value['order by']?>">
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
$this->db->add_Posts(htmlentities($_POST['name']),htmlentities($_POST['link']),htmlentities($_POST['orderby']));
?>
<div class="alert alert-info">
  <strong>Add!</strong>
</div>
<?php
}

function edit(){
$this->db->set_Posts_Where(htmlentities($_POST['id']),"name",htmlentities($_POST['name']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"link",htmlentities($_POST['link']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"order by",htmlentities($_POST['orderby']));
?>
<div class="alert alert-warning">
  <strong>Update!</strong>
</div>
<?php
}

function delete(){
$this->db->del_Posts_Where("ID",htmlentities($_POST['id']));
?>
<div class="alert alert-danger">
  <strong>Delete!</strong>
</div>
<?php
}

}
