<?php 
$table= new table; //instanisasi class table

class table {
private $cols;
private $rows;

//metode mendapatkan head
function generate_add(){
	?>
	<a class="pull-right" href="?p=<?=$_GET['p'] ?>&f=add<?=$_GET['p'] ?>">+ Add </a>
	<?php
}
//metode mendapatkan head
function generate_table(){

?>
<div class="content table-responsive table-full-width">
	<table class="table table-hover table-striped">
		<thead>
			<?php
			foreach($this->cols as $v){
			echo "<th>$v</th>"; //menampilkan kolom database
			}
			?>
		</thead>
		<tbody>
			<?php
			$arrlength = count($this->cols);
			foreach ($this->rows as $value) {
				echo '<tr>';
				for($x = 0; $x < $arrlength; $x++) {
					echo '<td>'.$value[$this->cols[$x]].'</td>'; //menampilkan baris data berdasarkan kolom database
				}
				echo '<td><a href="?p='.$_GET['p'].'&f=edit'.$_GET['p'].'&id='.$value[$this->cols[0]].'">Edit</a> | <a href="?p='.$_GET['p'].'&f=delete'.$_GET['p'].'&id='.$value[$this->cols[0]].'">Delete</a></td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>

</div>
<?php
}

//set kolom
function set_cols($arr=array()){
	$this->cols=$arr;
}
//set baris
function set_rows($arr=array()){
	$this->rows=$arr;
}

}
