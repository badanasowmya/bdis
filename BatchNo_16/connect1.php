<?php

$conn =mysqli_connect('localhost','root','','blood');
	if($conn){
		?>
		<script>
			alert("connection successful")
		</script>
		<?php
    } else {
        die("No connection". mysql_connect_error());
        }    

?>