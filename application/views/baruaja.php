<?php
	$UIDresult=$_GET["UIDresult"];
	$Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
	echo "cek$UIDresult";
	file_put_contents('UIDContainer.php',$Write);
?>
