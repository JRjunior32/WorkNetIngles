<!--<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script type="text/javascript">
	
	function getStates(value){

		$.post("getStates.php", {partialState:value}, function(data) {
			$("#results").html(data);
		});
	}
	</script>	
</head>
<body>
	<input type="text" onkeyup="getStates(this.value)"/>
	<br>
	<div id="results"></div>  
</body>
</html>--->
<input type="date" name="date">
<input type="submit">

<?php
if(isset($_POST['date'])){
    $fecha = $_POST['date'];
    $edad= intval((strtotime("now")-strtotime($fecha))/31536000);
    
    if($edad <= 18){
        echo "usted no es mayor de edad";
    }elseif($edad > 18)
        echo "usted es mayor de edad";

}
?>