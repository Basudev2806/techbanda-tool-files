<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>What's My IP Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Use our 'What's My IP' tool to quickly and easily find your current IP address. Discover your public IP and get information about your internet connection." />
    <meta name="keywords" content="What's My IP, IP address lookup, public IP, internet connection, IP information, find IP address" />

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
                            <h2 class="text-white animated zoomIn text-center">What's My IP Tool</h2>
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
                            <div class="col-lg-12 mb-5 mb-lg-0">
                            <br>
                                <br>
                                <div>
                                    <h3>Your IP Address :</h3>
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="whats_my_ip" style="color: black; font-size: medium;" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div>
                                    <button type="button" class="btn btn-primary" id="copy-btn" onclick="copyText()">Copy Text</button>
                                </div>
                                <br>
                                <br>
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
            <h2 class="text-center">What's My IP Tool</h2>
            <h2>What's My IP Tool</h2>
            <p>Discover the utility of our What's My IP Tool, engineered to provide you with instant access to your current IP address information. This straightforward tool enables you to ascertain your IP address, helping you gain insights into your online presence, security, and network connectivity.</p>
            <p>The What's My IP Tool simplifies the process of identifying your IP address. By offering a quick and accurate response to this fundamental query, you can make informed decisions related to online activities, troubleshoot network issues, and enhance your digital security.</p>
            <p>With our What's My IP Tool, you can access your IP address effortlessly and explore additional details like your geographical location and ISP (Internet Service Provider). Say farewell to uncertainty and embrace the convenience of knowing your digital identity for a more secure and informed online experience.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>

function copyText() {
    let copyIP = document.getElementById("whats_my_ip");
    copyIP.select();
    document.execCommand("copy");
}
</script>
</body>
</html>