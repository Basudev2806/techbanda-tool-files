<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RGB to Hex Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Convert RGB (Red, Green, Blue) values to hexadecimal color codes with our online RGB to Hex tool. Easily find the corresponding Hex code for any RGB color." name="description">
    <meta content="RGB to Hex, RGB to Hexadecimal, RGB to Hex Converter, Hex Color Code, RGB Color Code, Hexadecimal Color Converter, Online Color Tool" name="keywords">

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
    @keyframes write {
            from { width: 0; }
            to { width: 100%; }
        }
        #pingText {
            overflow: hidden;
            width: 100%;
            border: none;
            background-color: transparent;
            resize: none;
            font-family: monospace;
            color: black;
            font-size: 13px;
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
                            <h2 class="text-white animated zoomIn text-center">RGB to Hex Tool</h2>
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
                                <h3>RGB to HEX :</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-label">Red</label>
                                            <input name="r" value="255" type="number" class="form-control" placeholder="R">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-label">Green</label>
                                            <input name="g" value="255" type="number" class="form-control" placeholder="G">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-label">Blue</label>
                                            <input name="b" value="255" type="number" class="form-control" placeholder="B">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h3 id="customTag" style="display:none;">Hex Code :</h3>
                                <input type="text" class="form-control" id="hexOutput" name="hex" style="color: black; font-size: medium; display:none;" disabled>
                                <br>
                                <div class="row" style="display: inline-flex;">
                                    <div class="col-5 text-center"> 
                                        <button type="button" class="btn btn-primary" onclick="convertToHex()">Convert</button>
                                    </div>
                                    <div id = "copy" class="col-7 text-center" style ="display: none;"> 
                                        <button type="button" class="btn btn-primary" id="copy-btn" onclick="copyText()">Copy Text</button>
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
  </div>
  <!-- Jumbotron -->
</section>

<hr class="hr1">
    <div class="container">
            <div class="section-titles text-left" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
            <h2 class="text-center">RGB to Hex Tool</h2>
            <h2>RGB to Hex Tool</h2>
            <p>Discover the capabilities of our RGB to Hex Tool, meticulously designed to simplify the process of converting RGB color values into hexadecimal color codes. This versatile tool empowers you to effortlessly transform RGB colors into a format widely used in web design and development, making it an invaluable resource for designers, developers, and creative professionals.</p>
            <p>The RGB to Hex Tool simplifies the task of converting colors. By providing the RGB values, you can promptly obtain the corresponding hexadecimal color code, facilitating color selection and customization for your web projects.</p>
            <p>With our RGB to Hex Tool, you can conveniently input Red, Green, and Blue (RGB) color values and receive real-time hexadecimal color codes as output. Say goodbye to manual color code conversion and embrace the efficiency of our user-friendly tool for enhancing your design and development workflow.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>
function convertToHex() {
    // Get the RGB values
    const r = parseInt(document.querySelector('input[name="r"]').value);
    const g = parseInt(document.querySelector('input[name="g"]').value);
    const b = parseInt(document.querySelector('input[name="b"]').value);

    // Convert to hexadecimal
    const hex = "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);

    // Update the hexOutput input field
    const hexOutput = document.getElementById("hexOutput");
    hexOutput.value = hex;
    hexOutput.style.display = "block";
    document.getElementById("customTag").style.display = "block";
    document.getElementById("copy").style.display = "block";
}
function copyText() {
    let hexOutput = document.getElementById("hexOutput");
    hexOutput.removeAttribute("disabled");
    hexOutput.select();
    document.execCommand("copy");
    hexOutput.setAttribute("disabled", "true");
}
</script>
</body>
</html>