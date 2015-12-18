<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>活動報名</title>
	</head>
	<body>
	<h1 align = "center">活動報名<h1>
	
	<form action="people_post.php">
	<table align = "center">
	<tr>
		<td>
			<font>姓名:</font>
		</td>
		<td>
			<input name="name" type="text" size="15"><br>
		</td>
		</tr>
		<tr>
		<td>
			<font>服務單位:</font>
		</td>
		<td>
			<input name="unit" type="text" size="15">
		</td>
		</tr>
		<tr>
		<td>
			<font>職稱:</font>
		</td>
		<td>
			<input name="jobtitle" type="text" size="15">
		</td>
		</tr>
		<tr>
		<td>
			<font>連絡電話:</font>
		</td>
		<td>
			<input name="phone" type="text" size="15">
		</td>
		</tr>
		<tr>
		<td>
			<font>聯絡信箱:</font>
		</td>
		<td>
			<input name="email" type="text" size="15">
		</td>
		</tr>
		<tr>
		<td>
			<font>身分證字號:</font>
		</td>
		<td>
			<input name="id" type="text" size="15">
		</td>
		</tr>
		<tr>
			<td>
				<font>場次:</font>
			</td>
			<td>
				<form>
				<font>A</font>
					<select name="event_a">
　						<?php
							for($i=1;$i<=15;$i++){
								echo "<option value=$i>$i</option>";
							}
						?>
					</select>

				<font>B</font>

						<select name="event_b">
　							<?php
								for($i=1;$i<=15;$i++){
									echo "<option value=$i>$i</option>";
								}
							?>
						</select>


				<font>C</font>
	
						<select name="event_c">
　							<?php
								for($i=1;$i<=15;$i++){
									echo "<option value=$i>$i</option>";
								}
							?>
						</select>
				</form>
			</td>
		</tr>
		
		<tr>
		<td>
			<font>膳食調查</font>
		</td>
		<td>
			<input name="dish" type="radio" value ="meat" size="15" checked>葷
			<input name="dish" type="radio" value ="vagetable" size="15">素
		</td>
		</tr>
		<tr>
		<td align = "center">
			<input type="submit" value ="我要報名" size="15">
		</td>
		</tr>
	</table>
	</form>
	
	</body>
</html>
