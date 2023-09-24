<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Text to Image Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Text to Image Generator, SEO Tool, image optimization, text conversion, visual content, online tool" name="keywords">
    <meta content="Use our Text to Image Generator SEO Tool to convert your text into an image instantly. Optimize your visual content for SEO and enhance your website's user experience with our easy-to-use online tool." name="description">

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
    <link rel="canonical" href="https://techbanda.com/tools/text-to-image">
    <style>
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
                            <h2 class="text-white animated zoomIn text-center">Text to Image Generator Tool</h2>
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
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        

        <div class="col-lg-12 mb-5 mb-lg-0 align-items-center">
          <div class="card">
            <div class="card-body py-5 px-md-5">
            <form name="form" id="form" method="post" action="text-to-image.php"
                enctype="multipart/form-data" onsubmit="return validateForm();">
                <div class="col-lg-12 mb-5 mb-lg-0 form align-items-center">
                    <div style="text-align: center;">
                        <label>Enter Text in the below field -</label>
                <br>
                <br>
                        <input type="text"
                            class="input-field" name="txt_input" maxlength="50">
                    </div>
                </div>
                <br>
                <br>
                <div class="button" style="text-align: center;">
                    <input type="submit" id="submit" name="submit"
                        value="Convert">
                </div>
            </form>
                <div id="validation-response"></div>
            </div>
          </div>
        </div>
        
        
                    <?php
                    if (!empty($_POST['txt_input'])) {
                        $input_text = $_POST['txt_input'];
                        $width = 100;
                        $height = 100;
                        
                        $textImage = imagecreate($width, $height);
                        $color = imagecolorallocate($textImage, 0, 0, 0);
                        imagecolortransparent($textImage, $color);
                        imagestring($textImage, 20, 39 , 40, $input_text, 0xFFFFFF);
                        
                        
                        // create background image layer
                        $background = imagecreatefromjpeg('img/bg.jpeg');
                        
                        // Merge background image and text image layers
                        imagecopymerge($background, $textImage, 15, 15, 0, 0, $width, $height, 100);
                        
                        
                        $output = imagecreatetruecolor($width, $height);
                        imagecopy($output, $background, 0, 0, 20, 13, $width, $height);
                        
                        
                        ob_start();
                        imagepng($output);
                        printf('<img id="output" src="data:image/png;base64,%s" width="100" height="300" />', base64_encode(ob_get_clean()));
                    }
                    ?>
            <!--</div>-->
            </div>
        </div>
            <script>
                function validateForm() {
                    var valid = true;
                    document.getElementById("output").remove();
                    document.getElementById("validation-response").style.display = "none";
                    document.getElementById("validation-response").value = "";

                    if(document.form.txt_input.value == "") {
                        document.getElementById("validation-response").style.display = "block";
                        document.getElementById("validation-response").innerHTML = "Text Field Should not be Empty";
                        valid = false;
                    }  
                    
                    return valid;
                }
           </script>
  </div>
  </div>
  </div>
  <!-- Jumbotron -->
</section>
<hr class="hr1">
    <div class="container">
            <div class="section-titles text-left">
                 <h2 class="text-center">Text to Image Generator SEO Tool</h2>
                 <h2>Text to Image Generator SEO Tool</h2>
                <p>Text to Image Generator SEO Tool is an online tool used to convert plain text into an image file. The tool allows website owners and digital marketers to optimize their visual content for SEO purposes by incorporating relevant keywords into the text and customizing the image to fit their brand.</p>
                <p>Using visual content on your website can enhance the user experience and increase engagement. By converting text into images, website owners can create more visually appealing content and make it more shareable on social media platforms.</p>
                <p>With our Text to Image Generator SEO Tool, you can easily create custom images with your desired text and design elements. It's an effective way to optimize your website's visual content for SEO and attract more traffic to your site.</p>
            </div>
    </div>
<?php include('footer.php');?>
</body>
</html>