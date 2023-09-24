<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>.htaccess GENERATOR SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" .htaccess generator, SEO tool, website security, website optimization, website performance" name="keywords">
    <meta content="Use our .htaccess generator SEO tool to create a custom .htaccess file for your website. Improve your website's security, performance, and SEO by implementing redirects, blocking access to specific files or directories, and more." name="description">

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
labels {
    display: flex;
}
.section-titles::after {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    bottom: 0;
    left: 50px;
}

.section-titles::after {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    bottom: 0;
    left: 50px;
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
                    <a href="./" class="nav-item nav-link">Home</a>
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
                            <h2 class="text-white animated zoomIn text-center">.htaccess Generator Tool</h2>
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
                    <div class="container">		
                        <div class="row gx-lg-5 align-items-center ">
                            <div class="col-lg-12 mb-5 mb-lg-0" id="qrForm">
                            <form class="form-horizontal" method="post" id="codeForm" onsubmit="return false">
                            <div class="form-group">
                                <labels class="control-label text-left">URL:</labels>
                                <input class="form-control col-xs-1" id="content" type="text" required="required">
                            </div>
                        </form>
                        <br>
                        <br>
                        <form method="post" action="" id="optionsForm">
                            <input type="radio" name="option" value="qr" checked> Redirect from www to non-www
                            <span style="margin-left: 20px;"></span>
                            <input type="radio" name="option" value="barcode"> Redirect from non-www to www
                        </form>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" id = "submitButton" onclick="generateNewUrl()">Generate htaccess</button>
                        <br>
                        <br>
                        <div class="form-group" id="result"style="display: none;">
                            <label class="control-label">.htaccess :</label>
                            <textarea class="form-control" rows="5" id="newUrl" readonly style="resize: none;"></textarea>
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
  </div>
  <!-- Jumbotron -->
</section>

<hr class="hr1">
    <div class="container">
            <div class="section-titles text-left" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
                 <h2 class="text-center">.htaccess GENERATOR SEO Tool</h2>
                 <h2>.htaccess GENERATOR SEO Tool</h2>
                <p>Use our .htaccess generator SEO tool to easily create and customize the .htaccess file for your website. This tool helps you configure important settings and improve your website's security, performance, and SEO.</p>
                <p>The .htaccess GENERATOR SEO Tool is a tool used by website owners and developers to create and modify the .htaccess file for their website. The .htaccess file is a configuration file used by the Apache web server to control various aspects of website functionality, including URL rewriting, access control, and caching.</p>
                <p>Using the .htaccess GENERATOR SEO Tool, you can easily generate and customize the .htaccess file without having to manually edit it. This tool allows you to configure important settings such as redirect rules, error pages, caching, and security measures, which can help improve your website's performance, security, and SEO.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>
    // Get references to relevant elements
const codeForm = document.getElementById("codeForm");
const optionsForm = document.getElementById("optionsForm");
const contentInput = document.getElementById("content");
const newUrlTextarea = document.getElementById("newUrl");
const submitButton = document.getElementById("submitButton");

// Attach event listener to submit button
submitButton.addEventListener("click", function() {
  // Get content of input field
  const content = contentInput.value;
  
  // Extract domain name
  let domain = content.replace(/^(https?:\/\/)?(www\.)?/i, '');
  
  // Remove trailing slash if present
  if (domain.slice(-1) === '/') {
    domain = domain.slice(0, -1);
  }
  
  // Check selected option
  const selectedOption = optionsForm.querySelector("input[name='option']:checked").value;
  
  // Generate new URL based on selected option
  let newUrl;
  let redirectCode;
  if (selectedOption === "qr") {
    newUrl = "http://www." + domain + "/";
    // Redirect code for QR
    redirectCode = "RewriteEngine On\nRewriteCond %{HTTP_HOST} ^" + domain + " [NC]\nRewriteRule ^(.*)$ http://www." + domain + "/$1 [L,R=301]";
  } else if (selectedOption === "barcode") {
    newUrl = "http://" + domain + "/";
    // Redirect code for barcode
    redirectCode = "RewriteEngine On\nRewriteCond %{HTTP_HOST} ^www." + domain + " [NC]\nRewriteRule ^(.*)$ http://" + domain + "/$1 [L,R=301]";
  }
  
  // Display new URL in textarea
  newUrlTextarea.value = redirectCode;
  const htaccessDiv = document.getElementById("result");
  htaccessDiv.style.display = "flex";
});
    </script>
</body>
</html>