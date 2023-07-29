<?php
if(isset($_POST['submit'])){
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$date=$_POST['date'];
	$BG=$_POST['BG'];
	$email=$_POST['email'];
	$PN=$_POST['PN'];
	$Address=$_POST['Address'];
}
	// Database connection
	$conn =mysqli_connect('localhost','root','','blood');
	if($conn){
		?>
		<script>
			alert("connection successful")
		</script>
		<?php
		 $insertquery="insert into col(firstName,lastName,date,BG,email,PN,Address) values('$firstName','$lastName','$date', '$BG','$email','$PN','$Address')";
		 $res=mysqli_query($conn,$insertquery);
		 if($res){
			 ?>
			 <script>
				 alert("Registration succesfull");
			 </script>
			 <?php
		 }else{
			 ?>
			 <script>
				 alert("Registration not succesfull");
			 </script>
			 <?php
		 }
	} else {
		die("No connection". mysql_connect_error());
		}
	// 	$stmt = $conn->prepare("insert into reg(firstName,lastName,date,BG,email,PN,Address) values(?, ?, ?, ?, ?,?,?)");
	// 	$stmt->bind_param("sssssis", $firstName, $lastName,$date, $BG,$email,$PN,$Address);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
		
	// 	$stmt->close();
	// 	$conn->close();
	// }
?>
