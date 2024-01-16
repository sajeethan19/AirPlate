
<?php

$con = new PDO("mysql:host=localhost;dbname=passengers",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["bookref"];
	$sth = $con->prepare("SELECT * FROM `passengers` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>