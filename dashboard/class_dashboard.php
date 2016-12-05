<?php $dashboard= new dashboard; //instanisasi class dashboard

class dashboard {
private $db;
function __construct(){
global $database; //mengambil variable atau mendeklarasi ulang variable global
$this->db=$database;
}

//metode mendapatkan head
function head($title){
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?=favicon?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?=$title?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<meta name="description" content="<?= description ?>">
    <meta name="author" content="<?= author ?>">


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<?php
}
//metode mendapatkan header
function header(){
?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://rpl2014.com/" class="simple-text">
                    <?=namasitus?>
                </a>
            </div>

            <ul class="nav">
                <!--
				<li class="active">
                    <a href="http://rpl2014.com/dashboard/?p=dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>-->
				<?php 
				
				$menu=array(
					array(
						'link'=>'dashboard',
						'classcss'=>'pe-7s-graph'),
					array(
						'link'=>'users',
						'classcss'=>'pe-7s-user'),
					array(
						'link'=>'menu',
						'classcss'=>'pe-7s-way'),
					array(
						'link'=>'posts',
						'classcss'=>'pe-7s-pen'),
					
					);
				foreach($menu as $v){
				if($v['link']==$_GET['p']){
				$active="active";
				}else{
				$active="";
				}
				echo '<li class="'.$active.'">
                    <a href=' . base_url . 'dashboard/?p='.$v['link'].'>
                        <i class='.$v['classcss'].'></i>
                        <p>'.$v['link'].'</p>
                    </a>
                </li>';
				} ?>
                
            </ul>
    	</div>
    </div>
<?php
}
//metode mendapatkan nav
function nav(){
?>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?=$_GET['p']?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?=base_url ?>dashboard/?p=logout&token=<?=md5($_SESSION['username'])?>">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<?php
}
//metode mendapatkan footer
function footer(){
?>
        <footer class="footer">
            <div class="container-fluid">
				<nav class="pull-left">
					<ul>
					<?php
					foreach($this->db->get_Menu_Ordered() as $val){
					echo '<li><a href="'.$val['link'].'">'.$val['name'].'</a></li>';
					}
					?>
				</nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://rpl2014.com">SMKTI Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

</html>

<?php
}

}
?>