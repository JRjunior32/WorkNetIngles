<?php 
	mysql_connect("localhost", "root", "") or die (mysql_error());
	mysql_select_db("corpnet") or die (mysql_error());

	$partialStates = $_POST['partialState'];

	$states = mysql_query("SELECT Usuario FROM cuenta WERE Usuario LIKE '%$partialStates%'");
	while ($s = mysql_fetch_array($states)) {
		echo "<div>".$s['Usuario']."</div>";
	}
 ?>