<?php
if(isset($_POST['submit'])){
	
	$Name=$_POST['Name'];
	$email=$_POST['email'];
	$PN=$_POST['PN'];
	$Addr=$_POST['Addr'];
}
	// Database connection
	$conn =mysqli_connect('localhost','root','','blood');
	if($conn){
		?>
		<script>
			alert("connection successful")
		</script>
		<?php
		 $insertquery="insert into cont(Name,email,PN,Addr) values('$Name','$email','$PN','$Addr')";
		 $res=mysqli_query($conn,$insertquery);
		 if($res){
			 ?>
			 <script>
				 alert("feedback submitted");
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




