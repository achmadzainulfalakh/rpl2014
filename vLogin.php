<?php
$vLogin=new vLogin; //melakukan instanisasi

class vLogin{
function index(){ ?>

<!doctype html>
<html>
<head>
	
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login</title>
	<!--untuk mobile-->
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
	<!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	
	<!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


	
</head>
<body>
	<style>
	.content{padding:40px;}
	</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card" >
					<div class="header">
						<h1>Login</h1>
					</div>
					<div class="content">
						
						<form role="form" action="" method="POST">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd" name="password">
							</div>
							
							<div class="container-fluid">
							<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			</div>
		</div>
	</div>
</div>

</body>
</html>

<?php }
function cek_akun($redirect_link,$u,$p){


global $database;
$username= htmlspecialchars($u);
$password= htmlspecialchars($p);

$con=$database->connect();
$query="SELECT * FROM users where username='$username' and password='$password'";
$result = $con->query($query);


if($result->num_rows > 0){
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = $u;
$_SESSION["password"] = $p;

header('Location: ' . $redirect_link);
} else { 
?>
<div class="container">
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	</div>
	<div class="alert alert-info col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<strong>Info!</strong> Akun tidak ditemukan. 
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	</div>
</div> 
<?php
}

}
function cek_login($u,$p){


global $database;
$username= htmlspecialchars($u);
$password= htmlspecialchars($p);

$con=$database->connect();
$query="SELECT * FROM users where username='$username' and password='$password'";
$result = $con->query($query);


if($result->num_rows > 0){

} else { 
header('Location: http://RPL2014.com/page-not-found.php');
}

}

}



// Nama file: vLogin.php
// Lokasi File: RPL2014/vLogin.php