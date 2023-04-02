<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meta Description Length SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Meta description length checker, Meta description length SEO, Meta description optimization, Meta description length analyzer, Meta tag generator, SEO meta tags, Meta description length best practices, Meta description length guidelines, SEO tools, Search engine optimization" name="keywords">
    <meta content="Use our Meta Description Length SEO Tool to optimize your website's meta descriptions for search engines and users. Our tool checks the length of your meta description and lets you know if it's too short or too long, so you can make the necessary changes to improve your website's SEO. Try it now and take the first step towards optimizing your website for search engines!" name="description">

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
        body {
    min-height: 100%;
    position: relative;
}

#topbar {
    display: flex;
    height: 64px;
    width: 100%;
    align-items: flex-end;
    position: fixed;
    background-color: white;
}

#searchbarimage {
    height: 30px;
    padding: 0px 28px 10px 30px;
    cursor: pointer;
}

html, body {
    margin: 0;
    padding: 0;
    height: auto;
}

#searchbarmic {
    height: 45px;
    width: 35px;
    margin-left: auto;
    background-color: white;
}

#searchbarmic img {
    height: 25px;
}

#searchbarbutton {
    height: 45px;
    width: 55px;
    position: relative;
    margin-right: -2px;
    background-color: white;
}

#searchbarbutton svg {
    height: 25px;
    width: 35px;
    position: relative;
    left: -3px;
}

#searchbarbutton svg path {
    fill: #4285F4
}

#searchbar {
    width: 425px;
    height: 45px;
    border-radius: 100px;
    border-color: lightgray;
    border-style: solid;
    border-width: 1px;
    font-size: 16px;
    position: relative;
    bottom: 5px;
    overflow: hidden;
    display: flex;
    z-index: 100;
}

#searchbar:hover {
    box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
}

#searchbar > input {
    height: 45px;
    border-style: none;
    font-size: 16px;
    line-height: 45px;
    padding-left: 20px;
    flex: 1;
}

#searchbar > input:focus {
    outline: none;
}

#searchbar button {
    border: none;
    cursor: pointer;
}

#searchbar button:focus {
    outline: none;
}

#boxesicon {
    width: 25px;
    height: 25px;
    background-image: url('images/boxes.png');
    opacity: 0.6;
    background-size: 26px;
    position: absolute;
    right: 130px;
    bottom: 14px;
}

#optionsmenuactive::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 3px;
    background-color: #4285F4;
    left: 5px;
    bottom: 0px;
}

#optionsmenu2 {
    list-style: none;
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0px;
    margin-left: 100px;
}

#optionsmenu2 li {
    padding: 0px 10px 15px 20px;
}

#searchresultsarea {
    font-family: 'Arial';
}

#searchresultsnumber {
    font-size: 0.8rem;
    color: gray;
}

.searchresult {
    margin-left: 8px;
}

.searchresult h2 {
    font-size: 19px;
    line-height: 18px;
    font-weight: normal;
    color: rgb(29, 1, 189);
    margin-bottom: 0px;
    margin-top: 8px;
}

.searchresult a {
    font-size: 14px;
    line-height: 14px;
    color: green;
    margin-bottom: 0px;
}

.searchresult button {
    font-size: 10px;
    line-height: 14px;
    color: green;
    margin-bottom: 0px;
    padding: 0px;
    border-width: 0px;
    background-color: white;
}

#bellicon {
    width: 20px;
    height: 20px;
    background-color: rgb(105, 105, 105);
    background-image: url('images/bell.png');
    background-size: 12px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    border-radius: 30px;
    position: absolute;
    right: 90px;
    bottom: 18px;
}

#profileimage {
    border-radius: 50px;
    width: 32px;
    height: 32px;
    position: absolute;
    right: 40px;
    bottom: 12px;
}

#optionsbar {
    width: 100%;
    height: 50px;
    border-width: 0px;
    border-bottom: 1px;
    border-color: lightgray;
    border-style: solid;
    display: flex;
    align-items: flex-end;
    font-family: 'Arial';
    font-size: 13px;
    color: rgb(112, 112, 112);
    padding-top: 64px;
}

#optionsmenu1 {
    list-style: none;
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0px;
}

#optionsmenu1 li {
    padding: 0px 10px 15px 20px;
}

#optionsmenuactive {
    color: #4285F4;
    font-weight: bold;
    position: relative;
}

.searchresult p {
    /*width: 600px;*/
    font-size: 13px;
    margin-top: 0px;
    color: rgb(82, 82, 82);
}

.searchresult img {
  width: 100px; /* Adjust the size of the image as needed */
  margin-right: 10px; /* Add some margin between the image and text */
}

.relatedsearches h3 {
    font-weight: normal;
    font-size: 19px;
    margin-top: 40px;
    margin-bottom: 10px;
}

.relatedlists ul {
    list-style: none;
    color: rgb(29, 1, 189);
    padding-left: 0px;
    font-size: 14px;
    margin-bottom: 50px;
}

.relatedlists {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 300px;
}

.relatedlists ul li {
    margin-bottom: 8px;
}

.pagelist {
    list-style: none;
    color: rgb(29, 135, 255);
    display: flex;
    flex-direction: row;
    font-size: 12px;
    margin-bottom: 30px;
    margin-left: 100px;
}

.pagelistprevious::before {
    content: '<';
    display: block;
    position: absolute;
    right: 12px;
    top: -35px;
    color: rgb(29, 135, 255);
    font-size: 20px;
    transform: scale(0.7, 1.2);
}

.pagelistprevious::after {
    content: '';
    display: block;
    position: absolute;
    right: -40px;
    top: -35px;
    width: 40px;
    height: 40px;
    background-image: url('images/g.png');
    background-repeat: no-repeat;
    background-size: 28px;
}

.pagelistfirst {
    margin-left: 20px;
    font-size: 13px;
}

.pagelistnumber::before, .pagelistfirst::before {
    content: '';
    display: block;
    position: absolute;
    left: -2px;
    top: -21px;
    border-radius: 50px;
    width: 10px;
    height: 10px;
    background-color: white;
    z-index: 3;
}

.pagelistnumber::after {
    content: '';
    display: block;
    position: absolute;
    left: -6px;
    top: -25px;
    border-radius: 50px;
    width: 18px;
    height: 18px;
    background-color: rgb(255, 196, 0);
    z-index: 2;
}

.pagelistfirst::after {
    content: '';
    display: block;
    position: absolute;
    left: -6px;
    top: -25px;
    border-radius: 50px;
    width: 18px;
    height: 18px;
    background-color: red;
    z-index: 2;
}

.pagelist li {
    margin-right: 15px;
    position: relative;
}

.pagelistnext {
    margin-left: 40px;
    font-size: 13px;
}

.pagelistnext::before {
    content: '>';
    display: block;
    position: absolute;
    left: 5px;
    top: -35px;
    color: rgb(29, 135, 255);
    font-size: 20px;
    transform: scale(0.7, 1.2);
}

.pagelistnext::after {
    content: '';
    display: block;
    position: absolute;
    left: -55px;
    top: -37px;
    width: 50px;
    height: 50px;
    background-image: url('images/gle.png');
    background-repeat: no-repeat;
    background-size: 48px;
}


#footer {
    background-color: rgb(238, 238, 238);
    position: relative;
    left: 0px;
    bottom: 0px;
    width: 100%;
    font-size: 13px;
    font-family: 'arial';
    color: rgb(85, 85, 85);
}

#footermenu {
    list-style: none;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 135px;
    margin-bottom: 0px;
    padding-bottom: 10px;
}

#footermenu li {
    padding-right: 30px;
}

#footerlocation {
    display: flex;
    direction: row;
    margin-left: 175px;
    position: relative;
    top: -5px;
}

#footerlocation p:nth-of-type(1) {
    font-weight: bold;
}
 #blur {
        font-size: 40px;
        color: transparent;
        text-shadow: 0 0 8px #000;
      }
      
      * {box-sizing: border-box;}


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
                            <h2 class="text-white animated zoomIn text-center">Meta Description Checker Length Tool</h2>
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
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%) rgba(29, 29, 39, 0.7);">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="meta-description-checker.php" method="POST">
                <div class="row">
                   <div class="form-outline mb-4">
                    
                    <div class="form-outline">
                        <input type="text" class="form-control form-control-lg"  name="title" placeholder="Meta Length Checker SEO Tool"/>
                      <label class="form-label" for="form3Example1">Title</label>
                    </div>
                  </div>
                  <br>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="link" placeholder="https://monesta.live" />
                  <label class="form-label" for="form3Example3">Meta Link</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <textarea class="form-control" rows="3" name="des" placeholder="Meta length 160 words, snippet tool... we have it all! An awesome description will help boost your CTR and make you stand out in the search results! Try it today'"></textarea>
                  <label class="form-label" for="form3Example4">Description- 160 char</label>
                </div>

                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="image" placeholder="Image Url" />
                  <label class="form-label" for="form3Example4">Image Url</label>
                </div>
                
                <input type="submit" class="btn btn-primary btn-lg" value="Show Result"></button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
        <div id="header">
        <!--<div id="topbar">-->
            <img id="searchbarimage" src="img/googlelogo_color_92x30dp.png" />
            <div id="searchbar" type="text">
                <input id="searchbartext" type="text" value="Monesta" />
                <button id="searchbarmic">
                </button>
                <button id="searchbarbutton">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </div>
        <div id="optionsbar">
            <ul id="optionsmenu1">
                <li id="optionsmenuactive">All</li>
                <li>News</li>
                <li>Videos</li>
                <li>Images</li>
                <li>Maps</li>
            </ul>
        </div>
    </div>
    <div id="searchresultsarea">
    <div class="searchresult">
        <div class="result-content" style="text-align: left;" >
            <p id="searchresultsnumber">About 155,000 results (0.56 seconds) </p>
            <?php 
            $image_url = 'https://monesta.live/favicon.ico';
            $link = 'https://monesta.live';
            $title= 'Your SEO Title | SEO TITLE here';
            $des='Meta length 160 words, snippet tool... we have it all! An awesome description will help boost your CTR and make you stand out in the search results! Try it today';
            if(isset($_POST['title']) && isset($_POST['link']) && isset($_POST['des']) && isset($_POST['image']))
               {
                 $image_url = $_POST['image'];
                 $link= $_POST['link'] . "<br>";
                 $title= $_POST['title'] . "<br>";
                 $des= $_POST['des'] . "<br>";
                }
            ?>
            <?php if($link !=''|| $title !='' || $des !='' )
            {?>
            <a style="color:black">
            <img src="<?php echo $image_url ?>" style="height:32px;width:32px" alt="Image description">
            <span style="font-weight:bold;color:black;"><?php echo $title ?></span>
            <?php echo $link ?>
            </a>
            <h2><?php echo $title ?></h2>
            <p><?php echo $des ?></p>
            <?php 
            }
            ?>
        </div>
    </div>
</div>


        </div>
      </div>
    </div>
  </div>
</section>
<hr class="hr1">
    <div class="container">
            <div class="section-title text-left">
                 <h2 class="text-center">Canonical Tag Generator SEO Tool</h2>
                 <h2>What is a Canonical Tag Generator SEO Tool?</h2>
                <p>A Canonical Tag Generator SEO Tool is a tool used by website owners and digital marketers to generate and implement canonical tags on their websites. Canonical tags are HTML elements that are used to indicate the preferred version of a web page when there are multiple versions of that page available.</p>
                <h2>How does a Canonical Tag Generator SEO Tool work?</h2>
                <p>The Canonical Tag Generator SEO Tool is used to prevent duplicate content issues that can arise when multiple versions of a web page are accessible through different URLs. By specifying the canonical URL, website owners can indicate to search engines which version of the page should be indexed and displayed in search engine results.</p>
                <h2>Why is a Canonical Tag Generator SEO Tool important?</h2>
                <p>Using a Canonical Tag Generator SEO Tool can improve a website's SEO and prevent potential penalties for duplicate content. By specifying the preferred version of a web page, website owners can ensure that search engines are indexing and displaying the correct version of their content to users.</p>
                <h2>How to use a Canonical Tag Generator SEO Tool?</h2>
                <p>The Canonical Tag Generator SEO Tool typically includes a field for entering the URL of the web page, and generates the appropriate canonical tag based on this information. The generated canonical tag can then be added to the HTML code of the web page.</p>
            </div>
    </div>
                <?php include('footer.php');?>
</body>
</html>
