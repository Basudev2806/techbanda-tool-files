<?php 
include('header.php');
?>
<title>phpzag.com : Demo Build QR Code Generator with PHP and Ajax</title>
<link rel="stylesheet" href="css/style.css">
<script src="script/ajax_generate_code.js"></script>
<?php include('container.php');?>
	<div class="container">		
		<div class="row">
		<h2>Example: Build QR Code Generator with PHP and Ajax</div>
			<div class="col-md-3">
		        <form class="form-horizontal" method="post" id="codeForm" onsubmit="return false">
		            <div class="form-group">
		            	<label class="control-label">Code Content : </label>
		            	<input class="form-control col-xs-1" id="content" type="text" required="required">
		            </div>
		            <div class="form-group">
		            	<label class="control-label">Code Level (ECC) : </label>
		            	<select class="form-control col-xs-10" id="ecc">
		            		<option value="H">H - best</option>
		            		<option value="M">M</option>
		            		<option value="Q">Q</option>
		            		<option value="L">L - smallest</option>       		            
		            	</select>
		            </div>
		            <div class="form-group">
		            	<label class="control-label">Size : </label>
		            	<input type="number" min="1" max="10" step="1" class="form-control col-xs-10" id="size" value="5">
		            </div>
		            <div class="form-group">
		            	<label class="control-label"></label>
		            	<input type="submit" name="submit" id="submit" class="btn btn-success" value="Generate QR Code">
		            </div>
		        </form>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="showQRCode"></div>
	    	</div>
    	</div>
    </div>
</div>	
<?php include('footer.php');?>
