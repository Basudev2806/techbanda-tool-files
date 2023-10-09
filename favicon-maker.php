<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Image to Favicon GENERATOR SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="favicon generator, favicon creator, favicon maker, website branding, website icon, web design, website development, branding tool, user experience, website favicon, customize favicon, favicon design" />
    <meta name="description" content="Create custom favicons for your website with our Image to Favicon Generator SEO Tool. Easily generate and customize favicons to enhance your website's branding and user experience." />

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
                            <h2 class="text-white animated zoomIn text-center">Image to Favicon Generator Tool</h2>
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
                            <form>
                                <h2>Image for Favicon</h2>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="imageInput" accept="image/png,image/jpg,image/jpeg">
                                    <label class="input-group-text text-bg-primary" for="imageInput">
                                        Upload Image
                                    </label>
                                </div>
                                <br>
                                <canvas id="imageCanvas" width="128" height="128" style="display:none;margin:auto;"></canvas>
                                <br>
                                <label for="sizeSelect">Select Size:</label>
                                <br>
                                <select id="sizeSelect" class="form-select" style="text-align: center;width: fit-content;margin:auto;">
                                    <option value="16x16">16x16</option>
                                    <option value="32x32">32x32</option>
                                    <option value="48x48">48x48</option>
                                    <option value="64x64">64x64</option>
                                    <option value="128x128">128x128</option>
                                    <option value="256x256">256x256</option>
                                </select>
                                <br>
                                <label for="shapeSelect">Select Shape:</label>
                                <br>
                                <select id="shapeSelect" class="form-select" style="text-align: center;width: fit-content;margin:auto;">
                                    <option value="square">Square</option>
                                    <option value="circle">Circle</option>
                                </select>
                                <br>
                                <br>
                                <button type="button" class="btn btn-primary" id="generateButton">Generate</button>
                            </form>
                            <br>
                            <img alt="Generated Favicon" id="faviconImage" loading="lazy" style="display:none;margin:auto;">
                            <br>
                            <br>
                            <a id="downloadLink" style="display: none;">Download Favicon</a>
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
                 <h2 class="text-center">Image to Favicon GENERATOR SEO Tool</h2>
                 <h2>Image to Favicon Generator Tool</h2>
                <p>Harness the power of our Image to Favicon Generator Tool to effortlessly create and customize favicons for your website. This versatile tool empowers you to tailor your site's favicon, ensuring it perfectly complements your brand and enhances user recognition.</p>
                <p>The Image to Favicon Generator Tool streamlines the process of favicon creation, allowing you to effortlessly generate and fine-tune favicons that align with your website's visual identity. Whether you're crafting a distinctive logo or optimizing an existing image, this tool simplifies the favicon design process.</p>
                <p>With our Image to Favicon Generator Tool, you have the flexibility to select the dimensions, color schemes, and image sources for your favicons. It's a user-friendly solution that eliminates the complexities of manual favicon design. Elevate your website's branding and user experience with ease.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>
const imageInput = document.getElementById('imageInput');
const imageCanvas = document.getElementById('imageCanvas');
const sizeSelect = document.getElementById('sizeSelect');
const shapeSelect = document.getElementById('shapeSelect');
const generateButton = document.getElementById('generateButton');
const faviconImage = document.getElementById('faviconImage');
const downloadLink = document.getElementById('downloadLink');

let selectedSize = '16x16';
let selectedShape = 'square';

imageInput.addEventListener('change', () => {
    const file = imageInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = new Image();
            img.src = e.target.result;
            img.onload = function () {
                const ctx = imageCanvas.getContext('2d');
                ctx.clearRect(0, 0, imageCanvas.width, imageCanvas.height);
                ctx.drawImage(img, 0, 0, imageCanvas.width, imageCanvas.height);
            };
            imageCanvas.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});

sizeSelect.addEventListener('change', () => {
    selectedSize = sizeSelect.value;
});

shapeSelect.addEventListener('change', () => {
    selectedShape = shapeSelect.value;
});

generateButton.addEventListener('click', () => {
    const canvas = document.createElement('canvas');
    canvas.width = parseInt(selectedSize);
    canvas.height = parseInt(selectedSize);
    const ctx = canvas.getContext('2d');

    if (selectedShape === 'circle') {
        ctx.arc(canvas.width / 2, canvas.height / 2, canvas.width / 2, 0, 2 * Math.PI);
        ctx.clip();
    }

    ctx.drawImage(imageCanvas, 0, 0, canvas.width, canvas.height);

    const faviconURL = canvas.toDataURL('image/png');
    faviconImage.src = faviconURL;
    faviconImage.style.display = 'block';
    downloadLink.href = faviconURL;
    downloadLink.download = 'favicon.png';
    downloadLink.style.display = 'block';
});
</script>
</body>
</html>