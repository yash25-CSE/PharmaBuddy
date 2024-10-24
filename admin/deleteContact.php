<?php



				$connection=mysqli_connect("localhost","root","","cms");

				if($connection){
						//echo "connection is done";
				}
				else{
						echo "connection is not done";
				}
				
				$id=$_GET['id'];
				$query="delete from contact where id='".$id."'";
					$res=mysqli_query($connection,$query);
					echo "<script>alert('deleted done');window.location.href='contact.php';</script>";

?>
