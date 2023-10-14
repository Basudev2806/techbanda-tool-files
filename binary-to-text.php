<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Binary to Text Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Convert binary data to text with our Binary to Text Tool. Easily decode binary strings and files to human-readable text format online." name="description">
    <meta content="binary to text, binary conversion, binary decoder, binary to text converter, convert binary to text, binary code conversion, binary string to text, decode binary to text" name="keywords">

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
                            <h2 class="text-white animated zoomIn text-center">Binary to Text Tool</h2>
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
                                <div class="form-outline mb-4">
                                    <h4 style="text-align: start;">Enter the Binary you want to Decode</h4>
                                    <textarea class="form-control" id="binary_code" style="color: black; font-size: medium;" placeholder="Type your Binary here. Separated by spaces."></textarea>
                                    <br>
                                    <h4 id="decoded_binary_code_label" style="text-align: start;display: none;">Your converted Text</h4>
                                    <textarea class="form-control" id="decoded_binary_code" style="color: black; font-size: medium; display: none; font-size: 13px;" disabled></textarea>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="decodeBinary()">Decode</button>
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
            <h2 class="text-center">Binary to Text Tool</h2>
            <h2>Binary to Text Tool</h2>
            <p>Discover the utility of our Binary to Text Tool, designed to simplify the process of converting binary data into human-readable text. This versatile tool empowers you to effortlessly transform binary code into understandable text, making it a valuable resource for developers, security professionals, and anyone working with binary data.</p>
            <p>The Binary to Text Tool simplifies the task of decoding binary information. By inputting binary data, you can promptly obtain the corresponding text representation, aiding in data analysis and interpretation.</p>
            <p>With our Binary to Text Tool, you can conveniently input binary code and receive real-time text output. Say goodbye to deciphering binary data manually and embrace the efficiency of our user-friendly tool for handling binary information.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>

function decodeBinary() {
    var binaryInput = document.getElementById("binary_code");
    var decodedOutput = document.getElementById("decoded_binary_code");
    var decodedOutputLabel = document.getElementById("decoded_binary_code_label");
    var binaryText = binaryInput.value;

    // Split the binary input by spaces and convert to text
    var binaryArray = binaryText.split(' ');
    var decodedText = '';

    for (var i = 0; i < binaryArray.length; i++) {
        var binaryValue = binaryArray[i];
        var decimalValue = parseInt(binaryValue, 2);
        var char = String.fromCharCode(decimalValue);
        decodedText += char;
    }

    decodedOutput.value = decodedText;
    decodedOutput.style.display = "block";
    decodedOutputLabel.style.display = "block";
}

function copyText() {
    var text = document.getElementById("decoded_binary_code").value;
    var textArea = document.createElement("textarea");
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("copy");
    textArea.remove();

    document.getElementById("decoded_binary_code").classList.add("highlight");
}
</script>
</body>
</html>