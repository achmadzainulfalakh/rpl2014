
<?php global $dashboard ?>
<?php if(empty($dashboard)){
header('Location: http://RPL2014.com/page-not-found.php');
} else {
?>
<?php $dashboard->head("Dashboard") ?>
<?php $dashboard->header() ?>
<?php $dashboard->nav() ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                            </div>
							<div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="Foto User">

                                      <h4 class="title"><?=$_SESSION['username'] ?><br>
                                         <small>profile</small>
                                      </h4>
                                    </a>
                                </div>
                                <!--<p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>-->
                            </div>
                        </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					</div>
				</div>
			</div>
		</div>
<?php $dashboard->footer() ?>
<?php } ?>
