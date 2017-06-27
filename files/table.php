<table>
				<tr>
					<th>Date</th>
					<th>Ask</th>
					<th>Bid</th>
					<th>Open</th>
				</tr>
<?php
	include 'db.php';
	
	$query = "SELECT * FROM tick ORDER BY id DESC limit 10";
	$result = $conn->query($query);
	
	while($row = $result->fetch_assoc()) {
	
		  echo "<tr>";
                  echo "<td>" .$row["date"]."</td>";
                   echo "<td>" .$row["ask"]."</td>";
				   echo "<td>" .$row["bid"]."</td>";
				   echo "<td>" .$row["open"]."</td>";
			echo "</tr>";
	};
?>
</table>
