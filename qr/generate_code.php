<?php 
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST) && !empty($_POST)) {
	include('library/phpqrcode/qrlib.php'); 
	$codesDir = "codes/";	
	$codeFile = date('d-m-Y-h-i-s').'.png';
	$formData = $_POST['formData'];
	// generating QR code
	QRcode::png($formData, $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
	// display generated QR code
	$codesDir = "qr/codes/";
	echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
} else {
	header('location:./');
}
?>