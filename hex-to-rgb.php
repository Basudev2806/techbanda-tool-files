<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hex to RGB Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Convert hexadecimal color codes (Hex) to RGB color values with our Hex to RGB Tool. Easily and accurately translate Hex colors for web and graphic design projects." />
    <meta name="keywords" content="Hex to RGB Tool, Hexadecimal color converter, Hex color codes, RGB color values, Color conversion tool, Web design, Graphic design, Color code translation" />

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
                            <h2 class="text-white animated zoomIn text-center">Hex to RGB Tool</h2>
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
                                <h3>Hex to RGB :</h3>
                                <input type="text" class="form-control" id="hexInput" name="hex" style="color: black; font-size: medium;">
                                <h3 id="customTag" style="display:none;">RGB Code :</h3>
                                <div id ="rgbRow" class="row" style = "display:none;">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-label">Red</label>
                                            <input name="r" value="255" type="number" class="form-control" placeholder="R" style="text-align: center;" disabled>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-label">Green</label>
                                            <input name="g" value="255" type="number" class="form-control" placeholder="G" style="text-align: center;" disabled>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-label">Blue</label>
                                            <input name="b" value="255" type="number" class="form-control" placeholder="B" style="text-align: center;" disabled>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <button type="button" class="btn btn-primary" onclick="convertToRGB()">Convert</button>
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
            <h2 class="text-center">Hex to RGB Tool</h2>
            <h2>Hex to RGB Tool</h2>
            <p>Explore the capabilities of our Hex to RGB Tool, thoughtfully designed to simplify the process of converting hexadecimal color codes into RGB color values. This versatile tool empowers you to effortlessly transform hex colors into RGB format, which is commonly used in design and development, making it an invaluable resource for designers, developers, and creative professionals.</p>
            <p>The Hex to RGB Tool streamlines the task of converting colors. By providing the hexadecimal color code, you can quickly obtain the corresponding Red, Green, and Blue (RGB) color values, facilitating color selection and customization for your web projects.</p>
            <p>With our Hex to RGB Tool, you can conveniently input hexadecimal color codes and receive real-time RGB color values as output. Bid farewell to manual color code conversion and embrace the efficiency of our user-friendly tool for enhancing your design and development workflow.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>
function convertToRGB() {
    const hexInput = document.getElementById('hexInput').value;
    const customTag = document.getElementById('customTag');
    const row = document.getElementById('rgbRow');
    
    if (hexInput.match(/^#?([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/)) {
        const hex = hexInput.replace('#', '');
        const r = parseInt(hex.substring(0, 2), 16);
        const g = parseInt(hex.substring(2, 4), 16);
        const b = parseInt(hex.substring(4, 6), 16);
        
        document.querySelector('input[name="r"]').value = r;
        document.querySelector('input[name="g"]').value = g;
        document.querySelector('input[name="b"]').value = b;
        
        if (!hexInput.startsWith('#')) {
            document.getElementById('hexInput').value = "#" + hexInput;
        }
        customTag.style.display = 'block';
        row.style.display = 'flex';
    } else {
        customTag.style.display = 'none';
        row.style.display = 'none';
    }
}
</script>
</body>
</html>