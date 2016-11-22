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
												<input name="id" type="text" class="form-control" placeholder="automatic filled" value="" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Name</label>
												<input name="postname" type="text" class="form-control" placeholder="Name" value="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Link</label>
												<input name="postlink" type="text" class="form-control" placeholder="Link" value="" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Title</label>
												<input name="posttitle" type="text" class="form-control" placeholder="Title" value="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post sub Title</label>
												<input name="postsubtitle" type="text" class="form-control" placeholder="Sub Title" value="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Content</label>
												<textarea rows="15" class="form-control" name="content" type="text" class="form-control" placeholder="Content" required></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>Post Type</label>
												<input name="posttype" type="text" class="form-control" placeholder="Post Type" value="post" readonly>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Post Status</label>
												<input name="poststatus" type="text" class="form-control" placeholder="Post Status" value="publish" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Author</label>
												<input name="postauthor" type="text" class="form-control" placeholder="Author" value="<?=$_SESSION['username'] ?>" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Last Update</label>
												<?php date_default_timezone_set("Asia/Jakarta") ?>
												<input name="lastupdate" type="text" class="form-control" placeholder="Last Update" value="<?=date("H:i:s d-m-Y")?>" readonly>
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
                                <h4 class="title">Add Posts</h4>
                            </div>
							<div class="content">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>ID</label>
												<input name="id" type="text" class="form-control" placeholder="automatic filled" value="<?=$value['ID']?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Name</label>
												<input name="postname" type="text" class="form-control" placeholder="Name" value="<?=$value['post_name']?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Link</label>
												<input name="postlink" type="text" class="form-control" placeholder="Link" value="<?=$value['post_link']?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Title</label>
												<input name="posttitle" type="text" class="form-control" placeholder="Title" value="<?=$value['post_title']?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post sub Title</label>
												<input name="postsubtitle" type="text" class="form-control" placeholder="Sub Title" value="<?=$value['post_subtitle']?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Content</label>
												<textarea rows="15" class="form-control" name="content" type="text" class="form-control" placeholder="Content" required><?=$value['post_content']?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>Post Type</label>
												<input name="posttype" type="text" class="form-control" placeholder="Post Type" value="<?=$value['post_type']?>" readonly>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Post Status</label>
												<input name="poststatus" type="text" class="form-control" placeholder="Post Status" value="<?=$value['post_status']?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Author</label>
												<input name="postauthor" type="text" class="form-control" placeholder="Author" value="<?=$value['post_author']?>" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Last Update</label>
												<?php date_default_timezone_set("Asia/Jakarta") ?>
												<input name="lastupdate" type="text" class="form-control" placeholder="Last Update" value="<?=$value['post_update']?>" readonly>
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
                                <h4 class="title">Add Posts</h4>
                            </div>
							<div class="content">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>ID</label>
												<input name="id" type="text" class="form-control" placeholder="automatic filled" value="<?=$value['ID']?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Name</label>
												<input name="postname" type="text" class="form-control" placeholder="Name" value="<?=$value['post_name']?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Link</label>
												<input name="postlink" type="text" class="form-control" placeholder="Link" value="<?=$value['post_link']?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Title</label>
												<input name="posttitle" type="text" class="form-control" placeholder="Title" value="<?=$value['post_title']?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post sub Title</label>
												<input name="postsubtitle" type="text" class="form-control" placeholder="Sub Title" value="<?=$value['post_subtitle']?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Content</label>
												<textarea rows="15" class="form-control" name="content" type="text" class="form-control" placeholder="Content" required><?=$value['post_content']?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>Post Type</label>
												<input name="posttype" type="text" class="form-control" placeholder="Post Type" value="<?=$value['post_type']?>" readonly>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label>Post Status</label>
												<input name="poststatus" type="text" class="form-control" placeholder="Post Status" value="<?=$value['post_status']?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Post Author</label>
												<input name="postauthor" type="text" class="form-control" placeholder="Author" value="<?=$value['post_author']?>" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Last Update</label>
												<?php date_default_timezone_set("Asia/Jakarta") ?>
												<input name="lastupdate" type="text" class="form-control" placeholder="Last Update" value="<?=$value['post_update']?>" readonly>
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
$this->db->add_Posts(

htmlentities(str_replace(" ","",strtolower($_POST['postname']))),
base_url."blog/post.php?p=".htmlentities(str_replace(" ","",strtolower($_POST['postname']))),//postlink
htmlentities($_POST['posttitle']),
htmlentities($_POST['postsubtitle']),
$_POST['content'],
htmlentities($_POST['posttype']),
htmlentities($_POST['poststatus']),
htmlentities($_POST['postauthor']),
htmlentities($_POST['lastupdate'])
);
?>
<div class="alert alert-info">
  <strong>Add!</strong>
</div>
<?php
}

function edit(){
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_name",htmlentities($_POST['postname']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_link",base_url ."blog/post.php?p=".htmlentities(str_replace(" ","",strtolower($_POST['postname']))));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_title",htmlentities($_POST['posttitle']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_subtitle",htmlentities($_POST['postsubtitle']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_content",str_replace("<?","wow",$_POST['content']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_type",htmlentities($_POST['posttype']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_status",htmlentities($_POST['poststatus']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_author",htmlentities($_POST['postauthor']));
$this->db->set_Posts_Where(htmlentities($_POST['id']),"post_update",htmlentities($_POST['lastupdate']));
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
