<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QRCode & BARCODE GENERATOR SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="QR code generator, barcode generator, QR code maker, barcode maker, QR code creator, barcode creator, website QR code, product barcode, marketing QR code, custom QR code" name="keywords">
    <meta content="Generate QR codes and barcodes for your website with our QRCode & BARCODE GENERATOR SEO Tool. This tool allows you to quickly and easily create custom QR codes and barcodes for your website, products, or services. With options to customize the size and style of your codes, you can create unique and eye-catching designs to enhance your branding and improve your marketing efforts. Try our QRCode & BARCODE GENERATOR SEO Tool today and see the benefits for yourself" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        td.copy i {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
img.barcode {
    border: 1px solid #ccc;
    padding: 20px 10px;
    border-radius: 5px;
}
.showQRCode {
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	margin-top:35px;
}
.form-label {
    margin-bottom: 0.5rem;
}
label {
    display: flex;
}
        </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="./" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Tools</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <a href="./" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tools</a>
                            <div class="dropdown-menu m-0">
                                <a href="tools.php" class="dropdown-item active">Seo Tools</a>
                                <a href="dev-tools.php" class="dropdown-item">Developer Tools</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary mb-5">
                <div class="container my-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12">
                            <br>
                            <br>
                            <h2 class="text-white animated zoomIn text-center">QRCode & BARCODE Generator Tool</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start mx-auto" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5 text-center">
            <form method="post" action="" id="optionsForm">
            <input type="radio" name="option" value="qr" checked> Generate QR Code
            <span style="margin-left: 20px;"></span>
            <input type="radio" name="option" value="barcode"> Generate Barcode
            </form>
                    <div class="container">		
                        <div class="row gx-lg-5 align-items-center ">
                            <div class="col-lg-12 mb-5 mb-lg-0" id="qrForm" style="display: none;">
                                    <form class="form-horizontal" method="post" id="codeForm" onsubmit="return false">
                                        <div class="form-group">
                                        <label class="control-label">Code Content : </label>
                                        <input class="form-control col-xs-1" id="content" type="text" required="required">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <label class="control-label">Code Level (ECC) : </label>
                                        <select class="form-control col-xs-10" id="ecc">
                                            <option value="H">H - best</option>
                                            <option value="M">M</option>
                                            <option value="Q">Q</option>
                                            <option value="L">L - smallest</option>       		            
                                        </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <label class="control-label">Size : </label>
                                        <input type="number" min="1" max="10" step="1" class="form-control col-xs-10" id="size" value="5">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <label class="control-label"></label>
                                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Generate QR Code">
                                        </div>
                                    </form>
                                    <div class="col-lg-12 mb-5 mb-lg-0">
                                        <div class="showQRCode"></div>
                                    </div>
                            </div>	
		<div class="col-lg-12 mb-5 mb-lg-0" id="barcodeForm" style="display: none;">
			<form method="post">
				<div class="row">
					<div class="col-lg-12 mb-5 mb-lg-0">
						<div class="form-group">
							<label>Product Name or Number</label>
							<input type="text" name="barcodeText" class="form-control" value="<?php echo @$_POST['barcodeText'];?>">
						</div>
					</div>		
				</div>	
                <br>
				<div class="row">
				   <div class="col-lg-12 mb-5 mb-lg-0">
						<div class="form-group">
							<label>Barcode Type</label>
							<select name="barcodeType" id="barcodeType" class="form-control">
								<option value="codabar" <?php echo (@$_POST['barcodeType'] == 'codabar' ? 'selected="selected"' : ''); ?>>Codabar</option>
								<option value="code128" <?php echo (@$_POST['barcodeType'] == 'code128' ? 'selected="selected"' : ''); ?>>Code128</option>
								<option value="code39" <?php echo (@$_POST['barcodeType'] == 'code39' ? 'selected="selected"' : ''); ?>>Code39</option>
							</select> 
						</div>
					</div>
				</div>
                <br>
				<div class="row">
					<div class="col-lg-12 mb-5 mb-lg-0">
						 <div class="form-group">
							 <label>Barcode Display</label>
							 <select name="barcodeDisplay" class="form-control" required>
								<option value="horizontal" <?php echo (@$_POST['barcodeDisplay'] == 'horizontal' ? 'selected="selected"' : ''); ?>>Horizontal</option>
								<option value="vertical" <?php echo (@$_POST['barcodeDisplay'] == 'vertical' ? 'selected="selected"' : ''); ?>>Vertical</option>
							 </select>
						 </div>
					</div>
				</div>	
                <br>
				<div class="row">
					<div class="col-lg-12 mb-5 mb-lg-0">
						<input type="hidden" name="barcodeSize" id="barcodeSize" value="20">
						<input type="hidden" name="printText" id="printText" value="true">
						<input type="submit" name="generateBarcode" class="btn btn-success" value="Generate Barcode">
					</div>
				</div>
			</form>
		</div>
        <br>
        <br>
		<div class="col-lg-12 mb-5 mb-lg-0">
		 <?php
			if(isset($_POST['generateBarcode'])) {
				$barcodeText = trim($_POST['barcodeText']);
				$barcodeType=$_POST['barcodeType'];
				$barcodeDisplay=$_POST['barcodeDisplay'];
				$barcodeSize=$_POST['barcodeSize'];
				$printText=$_POST['printText'];
				if($barcodeText != '') {
					echo '<h4>Barcode:</h4>';
					echo '<img class="barcode" alt="'.$barcodeText.'" src="barcode/barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
				} else {
					echo '<div class="alert alert-danger">Enter product name or number to generate barcode!</div>';
				}
			}
		?>
		</div>
                        </div>
                    </div>
                </div>	
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

<hr class="hr1">
    <div class="container">
            <div class="section-title text-left">
                 <h2 class="text-center">QRCode & BARCODE GENERATOR SEO Tool</h2>
                 <h2>What is a QR Code & Barcode Generator SEO Tool?</h2>
                <p>A QR Code & Barcode Generator SEO Tool is a tool used by website owners and digital marketers to generate QR codes and barcodes for their websites. These codes can be used to provide additional information about a product or service, or to link to a specific webpage or online resource.</p>
                <p>QR codes and barcodes are popular in marketing and advertising, as they provide a quick and easy way for consumers to access information or make a purchase. By using a QR Code & Barcode Generator SEO Tool, website owners can improve the user experience and increase engagement with their target audience.</p>
                <p>Optimizing QR codes and barcodes can also improve a website's visibility and ranking in search engine results, as well as increase click-through rates from users who scan the codes. With our QR Code & Barcode Generator SEO Tool, you can easily create and optimize QR codes and barcodes to enhance your website's SEO performance.</p>
            </div>
    </div>

<?php include('footer.php');?>
    <script>
            $(document).ready(function() {
            $("#codeForm").submit(function(){
                $.ajax({
                    url:'qr/generate_code.php',
                    type:'POST',
                    data: {formData:$("#content").val(), ecc:$("#ecc").val(), size:$("#size").val()},
                    success: function(response) {
                        $(".showQRCode").html(response);  
                    },
                });
            });
        });
        </script>
        <script type="text/javascript">
		$(document).ready(function(){
			var option = $('input[name="option"]:checked').val();
			showForm(option);

			$('input[name="option"]').change(function(){
				showForm($(this).val());
			});

			function showForm(option) {
				if (option == 'qr') {
					$('#qrForm').show();
					$('#barcodeForm').hide();
				} else {
					$('#qrForm').hide();
					$('#barcodeForm').show();
				}
			}
		});
	</script>
</body>
</html>