<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Twitter Card Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Twitter Card, SEO Tool, social media, website optimization, social media optimization" name="keywords">
    <meta content="Use our Twitter Card Generator SEO Tool to create optimized Twitter Cards for your website. Twitter Cards are a powerful social media optimization tool that can improve your website's visibility and engagement on Twitter. Our tool makes it easy to create and customize Twitter Cards to ensure that your website's content is effectively represented on social media." name="description">

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
              .form-label {
    margin-bottom: 0.5rem;
}
label {
    display: flex;
}

.cards {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    border-radius: 10px;
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
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Tools</a>
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
                            <h2 class="text-white animated zoomIn text-center">Twitter Card Generator Tool</h2>
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
        

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="twitter-card-generator.php" method="POST">
                      
                
                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="twcard" placeholder="Twitter Card" />
                 <label class="form-label" for="form3Example3">Twitter Card</label>
                </div>
                   <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="twsite" placeholder="Twitter Site" />
                 <label class="form-label" for="form3Example3">Twitter Site</label>
                </div>
                
                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="twcreator" placeholder="Twitter Creator" />
                 <label class="form-label" for="form3Example3">Twitter Creator</label>
                </div>
                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="twtitle" placeholder="Twitter Title" />
                 <label class="form-label" for="form3Example3">Twitter Title</label>
                </div>
                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="twdes" placeholder="Twitter Description" />
                 <label class="form-label" for="form3Example3">Twitter Description</label>
                </div>
                
                <input type="submit" class="btn btn-primary btn-lg" value="Show Result"></button>
               
              </form>
            </div>
          </div>
        </div>
        
        
            <!--<div class="card-body py-5 px-md-5">-->
                 <?php
                       $twcard= '';
                       $twsite = '';
                       $twcreator = '';
                       $twtitle='';
                       $twdes='';
                         if(isset($_POST['twcard']) && isset($_POST['twsite']) && isset($_POST['twcreator']) && isset($_POST['twtitle']) && isset($_POST['twdes']))
                           {
            
                              $twcard= $_POST['twcard'];
                               $twsite= $_POST['twsite'];
                               $twcreator= $_POST['twcreator'];
                               $twtitle= $_POST['twtitle'];
                               $twdes= $_POST['twdes'];
                            }
                ?>
                <?php if($twcard !='' || $twsite !='' || $twcreator !='' || $twtitle !='' || $twdes !='')
                {?>
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="cards" >
                <h3 class="text-center text-white form-outline" style="background-color: rgb(33, 36, 177)"><i class="fab fa-twitter"></i>&nbsp;&nbsp;&nbsp;Twitter Card</h3>                
                 <textarea id="myInput" cols="30" rows="10"style="font-weight: bold;color:blueviolet;"><meta name="twitter:card" content="<?php echo $twcard ?>">&#13;&#10;<meta name="twitter:site" content="<?php echo $twsite ?>">&#13;&#10;<meta name="twitter:creator" content="<?php echo $twcreator ?>">&#13;&#10;<meta name="twitter:title" content="<?php echo $twtitle ?>">&#13;&#10;<meta name="twitter:description" content="<?php echo $twdes ?>">&#13;&#10;<meta name="twitter:image" content="https://monesta.live/assets/img/me.jpg"></textarea>
                 <br>
                 <button onclick="myFunction()" style="background-color: rgb(33,36,177); font-weight: bold" class="text-white border-0 position-relative wow fadeIn" data-wow-delay="0.1s">Copy text</button>
               <?php 
               }
               ?>
            <!--</div>-->
            </div>
        </div>
            <script>
                 function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
           </script>
  </div>
  </div>
  </div>
  <!-- Jumbotron -->
</section>
<hr class="hr1">
    <div class="container">
            <div class="section-title text-left">
                 <h2 class="text-center">Twitter Card Generator SEO Tool</h2>
                 <h2>What is Twitter Card Generator SEO Tool?</h2>
                <p>Twitter Card Generator SEO Tool is a tool used to create and optimize Twitter Cards for websites. Twitter Cards are a type of meta tag that allows website owners to customize how their website's content appears on Twitter. By using Twitter Cards, website owners can improve the visibility and engagement of their website's content on social media. </p>
                <p>Our Twitter Card Generator SEO Tool makes it easy to create and customize Twitter Cards for your website. With our tool, you can choose from several different types of Twitter Cards, including summary cards, summary cards with large images, and app cards. You can also customize the content and appearance of your Twitter Cards to ensure that they effectively represent your website's content on social media.</p>
                <p>By using our Twitter Card Generator SEO Tool, you can improve your website's social media optimization and increase engagement with your audience on Twitter. Try our tool today and start creating optimized Twitter Cards for your website!</p>
            </div>
    </div>
<?php include('footer.php');?>
</body>
</html>