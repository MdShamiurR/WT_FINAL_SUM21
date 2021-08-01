<?php
	include 'db_config.php';
	if($conn){
		//echo "connected";
		$query="insert into user values(NULL,'Samit Rahman','Samit','3456')";
		
		$query = "select id,name from user";
		$result = mysqli_query($conn,$query);
		
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Id</th><th>Name</th>
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			
			echo "<tr>";
				echo"<td>".$row["id"]."</td>";
				echo"<td>".$row["name"]."</td>";
				
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>