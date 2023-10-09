<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lorem Ipsum GENERATOR SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Lorem Ipsum generator, Lorem Ipsum text, placeholder text, SEO tool, web development, design mockups, print materials, website content, text generation, web design, SEO-friendly" name="keywords">
    <meta content="Generate Lorem Ipsum text for your web projects with our SEO-friendly Lorem Ipsum Generator tool. Quickly create placeholder text for websites, design mockups, and print materials." name="description">

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
                            <h2 class="text-white animated zoomIn text-center">Lorem Ipsum Generator Tool</h2>
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
                                <label for="numParagraphs">Number of Paragraphs:</label>
                                <input type="number" class="form-control form-control-lg" id="numParagraphs" min="1" max="10" value="3" style="width: auto;text-align: center;display: inline-table;">
                                <br>
                                <div class="form-check" style="width: fit-content;display: inline-table;">
                                    <input class="form-check-input" type="checkbox" id="title" value="title">
                                    <label class="form-check-label" for="title">Include Title</label>
                                </div>
                                <br>
                                <div class="form-check" style="width: fit-content;display: inline-table;">
                                    <input class="form-check-input" type="checkbox" id="sentence" value="sentence">
                                    <label class="form-check-label" for="sentence">Include Sentence</label>
                                </div>
                                <br>
                                <br>
                                <button type="button" class="btn btn-primary" onclick="generateText()">Generate</button>
                            </form>
                            <br>
                                <br>
                                <div>
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" cols="30" rows="10" id="loremIpsum"></textarea>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div>
                                    <button type="button" class="btn btn-primary" id="copy-btn">Copy Text</button>
                                    <button type="button" class="btn btn-primary" id="download-btn">Download Text</button><br/><br/>
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
                 <h2 class="text-center">Lorem Ipsum GENERATOR SEO Tool</h2>
                 <h2>Lorem Ipsum Generator Tool</h2>
                <p>Utilize our Lorem Ipsum Generator SEO Tool to effortlessly generate and tailor Lorem Ipsum text for your website. This versatile tool enables you to customize the length and content of Lorem Ipsum text, making it an ideal resource for designers, developers, and content creators.</p>
                <p>The Lorem Ipsum Generator SEO Tool simplifies the process of generating placeholder text for your web projects. Whether you need random text for design mockups, testing layouts, or filling content gaps, this tool streamlines the creation of Lorem Ipsum text.</p>
                <p>With our Lorem Ipsum Generator Tool, you can easily specify the number of paragraphs and words, choose between traditional Latin text or themed variations, and quickly generate text that suits your project's needs. Say goodbye to manual Lorem Ipsum generation and enjoy the convenience of our user-friendly tool.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>
    function generateText() {
    var numParagraphs = document.getElementById("numParagraphs").value;
    var loremIpsum = "";
    if (document.getElementById("title").checked) {
      loremIpsum += "Lorem Ipsum Title\n\n";
    }
    if (document.getElementById("sentence").checked) {
      loremIpsum += "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n\n";
    }
    for (var i = 0; i < numParagraphs; i++) {
        loremIpsum += "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id blandit convallis, augue risus malesuada est, a malesuada ipsum augue id nibh. Fusce euismod euismod augue, id commodo augue aliquet sit amet. Sed eget massa at velit congue malesuada. Fusce in malesuada ipsum. Nam ac est vel ligula ullamcorper malesuada at euismod augue. Sed ornare turpis ut augue volutpat, at interdum nisl facilisis. Sed quis elit id est luctus malesuada. Nullam malesuada nibh nunc, at euismod augue malesuada vel.\n\n";
    }
    document.getElementById("loremIpsum").value = loremIpsum;
}

function downloadText() {
    var text = document.getElementById("loremIpsum").value;
    var a = document.createElement("a");
    var file = new Blob([text], {type: 'text/plain'});
    a.href = URL.createObjectURL(file);
    a.download = "loremIpsum.txt";
    a.click();
}

function copyText() {
    var text = document.getElementById("loremIpsum").value;
    var textArea = document.createElement("textarea");
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("copy");
    textArea.remove();

    document.getElementById("loremIpsum").classList.add("highlight");
}
</script>
</body>
</html>