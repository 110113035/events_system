<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>活動列表</title>
	</head>
	<body>
		<h1 align="center">活動列表</h1>
		<?php

			require_once("dbtools.inc.php");
			$link = create_connection();
			$sql1 = "SELECT * FROM events_info";
			$sql2 = "SELECT * FROM events_people";
			mysqli_query($link, 'SET CHARACTER SET 	utf8');	
			mysqli_query($link,  "SET collation_connection = 'utf8_general_ci'");			
			$result1 = execute_sql("events",$sql1 ,$link);
			$result2 = execute_sql("events",$sql2 ,$link);
			
			$total_fields=mysqli_num_fields($result1); // 取得欄位數

			$total_records1=mysqli_num_rows($result1);  // 取得記錄數
			$total_records2=mysqli_num_rows($result2);
		?>
		
		<table  border=1 align="center">

		<tr>

		<td>id</td>

		<td>name</td>

		<td>text</td>
	
		<td>other</td>
		
		<td>people</td>
		
		<td>      </td>
		
	    </tr>
		
		<?php for ($i=0;$i<$total_records1;$i++) {$row = mysqli_fetch_assoc($result1);   ?>

		<tr>

		<td><?php echo $row['eiuid'];   ?></td>        

		<td><?php echo $row['eititle'];   ?></td> 

		<td><?php echo $row['eicontext']; ?></td>

		<td><?php echo $row['eiother']; ?></td>

		<td><?php echo $total_records2; ?></td>
		
		<td><a href="people.php">我要報名</a></td>

		</tr>
		
		<?php    }   ?>

	</body>
</html>
