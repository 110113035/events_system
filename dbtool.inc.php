<?php
	function create_connection()
	{
		$link = mysqli_connect("localhost", "root", "123456789")
			or die("無法建立資料連結<br><br>" . mysqli_error());
			
			return $link;
	}
	
	
	function execute_sql($database,$sql,$link)
	{
		
		$db_select = mysqli_select_db($link,$database )
			or die("開啟資料庫失敗<br><br>" .mysqli_error($link));
		$result = mysqli_query($link, $sql);
		return $result;
	}
?>
