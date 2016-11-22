<?php
$database=new database("localhost","root","","rpl2014"); //melakukan instanisasi
//class database
class database{
//property
private $host;
private $username;
private $password;
private $dbname;
//konstruktor
function __construct($a,$b,$c,$d){
$this->host=$a;
$this->username=$b;
$this->password=$c;
$this->dbname=$d;

}
//metode koneksi atau connect
function connect(){
$con=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
if (mysqli_connect_errno()){
echo "Gagal konek ke mysqli: " . mysqli_connect_error();
} 
return $con;
}
/*************************************** CRUD posts ***************************************/
//menampilkan posts
function get_Posts(){
$con=$this->connect();
$query="SELECT * FROM posts where post_type='post'";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan about
function get_About(){
$con=$this->connect();
$query="SELECT * FROM posts where post_name='about'";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan contact
function get_Contact(){
$con=$this->connect();
$query="SELECT * FROM posts where post_name='contact'";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan sigle post
function get_Post($postName){
$con=$this->connect();
$query="SELECT * FROM posts where post_name='$postName'";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan posts tertentu(dashboard)
function get_Posts_Where($col,$id){
$con=$this->connect();
$query="SELECT * FROM `posts` where `$col`='$id' and post_type='post'";
$result = mysqli_query($con,$query);
return $result;
}
//menambah posts(dashboard)
function add_Posts(
$postname,
$postlink,
$posttitle,
$postsubtitle,
$content,
$posttype,
$poststatus,
$postauthor,
$lastupdate
){
$con=$this->connect();
$query="INSERT INTO `posts` (
`ID`,
`post_name`,
`post_link`,
`post_title`,
`post_subtitle`,
`post_content`,
`post_type`,
`post_status`,
`post_author`,
`post_update`
) values (
'null',
'$postname',
'$postlink',
'$posttitle',
'$postsubtitle',
'$content',
'$posttype',
'$poststatus',
'$postauthor',
'$lastupdate')";
$result = mysqli_query($con,$query);
if(!$result){
echo "Error: " . $query . "<br>" . mysqli_error($con);
} else{
return $result;
}
}
//Mengubah posts(dashboard)
function set_Posts_Where($id,$col,$val){
$con=$this->connect();
$query="UPDATE `posts` SET `$col`='$val' where `ID`='$id'";
$result = mysqli_query($con,$query);
return $result;
}
//Menghapus posts(dashboard)
function del_Posts_Where($col,$id){
$con=$this->connect();
$query="DELETE FROM `posts` where `$col`='$id'";
$result = mysqli_query($con,$query);
return $result;
}
/*************************************** CRUD menu ***************************************/
//menampilkan menu
function get_Menu(){
$con=$this->connect();
$query="SELECT * FROM menu";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan menu urut
function get_Menu_Ordered(){
$con=$this->connect();
$query="SELECT * FROM menu";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan menu tertentu
function get_Menu_Where($col,$id){
$con=$this->connect();
$query="SELECT * FROM menu where $col=$id";
$result = mysqli_query($con,$query);
return $result;
}
//menambah menu
function add_Menu($name,$link,$orderby){
$con=$this->connect();
$query="INSERT INTO menu (`ID`,`name`,`link`,`order by`) values ('null','$name','$link','$orderby')";
$result = mysqli_query($con,$query);
return $result;
}
//Mengubah menu
function set_Menu_Where($id,$col,$val){
$con=$this->connect();
$query="UPDATE menu SET `$col`='$val' where `ID`='$id'";
$result = mysqli_query($con,$query);
return $result;
}
//Menghapus menu
function del_Menu_Where($col,$id){
$con=$this->connect();
$query="DELETE FROM menu where $col=$id";
$result = mysqli_query($con,$query);
return $result;
}
/*************************************** CRUD user ***************************************/
//menampilkan user
function get_Users(){
$con=$this->connect();
$query="SELECT * FROM `users`";
$result = mysqli_query($con,$query);
return $result;
}
//menampilkan users tertentu
function get_Users_Where($col,$id){
$con=$this->connect();
$query="SELECT * FROM `users` where `$col`='$id'";
$result = mysqli_query($con,$query);
return $result;
}
//menambah users
function add_Users($username,$password,$level){
$con=$this->connect();
$query="INSERT INTO `users` (`ID`,`username`,`password`,`level`) values ('null','$username','$password','$level')";
$result = mysqli_query($con,$query);
return $result;
}
//Mengubah users
function set_Users_Where($id,$col,$val){
$con=$this->connect();
$query="UPDATE `users` SET `$col`='$val' where `ID`='$id'";
$result = mysqli_query($con,$query);
return $result;
}
//Menghapus users
function del_Users_Where($col,$id){
$con=$this->connect();
$query="DELETE FROM `users` where `$col`='$id'";
$result = mysqli_query($con,$query);
return $result;

}

}

// Nama file: database.php
// Lokasi File: RPL2014/database.php
