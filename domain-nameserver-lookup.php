<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Domain Nameserver Lookup Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Domain Nameserver Lookup Tool, DNS lookup, nameserver checker">
    <meta name="description" content="Use our Domain Nameserver Lookup Tool to check the DNS records and nameservers of any domain. Find information about the domain's nameservers, IP address, and more.">

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
    <link rel="canonical" href="https://techbanda.com/tools/ssl-info">
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
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #e0e0e0;
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
                            <h2 class="text-white animated zoomIn text-center">Domain Nameserver Lookup</h2>
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
                <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-body py-5 px-md-5">
                    <form action="domain-nameserver-lookup.php" method="post">
                    <div class="form-group row">
                            <label for="inputText" class="col-sm-2 col-form-label">Search for Domains </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" name="host" placeholder="URL" />
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-lg" name="lookup">LookUp</button>
                            </div>
                        </div>
                    </form>
                    <?php

                    function getWhoisData($domain) {
                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                            CURLOPT_URL => "https://whoisdata.tech/?domain=$domain",
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_SSL_VERIFYHOST => false,
                            CURLOPT_SSL_VERIFYPEER => false,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'GET'
                        ));

                        $response = curl_exec($curl);

                        if (curl_errno($curl)) {
                            echo 'Curl error: ' . curl_error($curl);
                        }

                        curl_close($curl);

                        return $response;
                    }

                    if (isset($_POST['lookup'])) {
                        $url = $_POST['host'];
                        $input_value = $_POST['host'];
                        $url = preg_replace("~^(?:f|ht)tps?://~i", '', $url);
                        $url = preg_replace('/^www\./', '', $url);

                        $nsRecords = dns_get_record($url, DNS_NS);
                        $dnsRecords = dns_get_record($url, DNS_ALL);

                        $whoisData = getWhoisData($url);
                        $data = json_decode($whoisData, true);

                        $domainName = $data["Domain Name"];
                        $registryDomainID = $data["Registry Domain ID"];
                        $registrarWhoisServer = $data["Registrar WHOIS Server"];
                        $registrarURL = $data["Registrar URL"];
                        $updatedDate = $data["Updated Date"];
                        $creationDate = $data["Creation Date"];
                        $registryExpiryDate = $data["Registry Expiry Date"];
                        $registrar = $data["Registrar"];
                        $domainStatus = $data["Domain Status"];

                        echo '<h4 style="text-align: left;font-size: 20px;color: gray;">Domain: '.strtolower($domainName).'</h4>';
                        echo '<h4 style="text-align: left;font-size: 18px;color: darkgrey;">whois information</h4>';

                        echo '<h2 style="text-align: center;">Registrar Info</h2>';
                        echo '<table style="width: 100%;">';
                        echo '<tr><th>Name</th><td style="border-width: 1;">' . $registrar . '</td></tr>';
                        echo '<tr><th>Whois Server</th><td style="border-width: 1;">' . $registrarWhoisServer . '</td></tr>';
                        echo '<tr><th>Referral URL</th><td style="border-width: 1;">' . $registrarURL . '</td></tr>';
                        echo '<tr><th>Status</th><td style="border-width: 1;">' . $domainStatus . '</td></tr>';
                        echo '</table>';

                        echo '<h2 style="text-align: center;">Important Dates</h2>';
                        echo '<table style="width: 100%;">';
                        echo '<tr><th>Expires On</th><td style="border-width: 1;">' . $registryExpiryDate . '</td></tr>';
                        echo '<tr><th>Registered On</th><td style="border-width: 1;">' . $creationDate . '</td></tr>';
                        echo '<tr><th>Updated On</th><td style="border-width: 1;">' . $updatedDate . '</td></tr>';
                        echo '</table>';

                        echo '<h2 style="text-align: center;">Name Servers</h2>';
                        if ($nsRecords) {
                            echo '<table style="width: 100%;">';
                            foreach ($nsRecords as $nsRecord) {
                                echo '<tr><th>' . $nsRecord['target'] . '</th><td style="border-width: 1;">' . gethostbyname($nsRecord['target']) . '</td></tr>';
                            }
                            echo '</table>';
                        } else {
                            echo "<p>No nameserver records found for $domain</p>";
                        }

                        $originalDomain = $dnsRecords[3]['rname'];
                        $firstDotPosition = strpos($originalDomain, '.');
                        $convertedDomain = substr_replace($originalDomain, '@', $firstDotPosition, 1);                        

                        echo '<h2 style="text-align: center;">DNS Records</h2>';

                        echo '<table style="width: 100%;" border="1">';
                        echo '<tr>';
                        echo '<th>Hostname</th>';
                        echo '<th>Type</th>';
                        echo '<th>TTL</th>';
                        echo '<th>Priority</th>';
                        echo '<th>Content</th>';
                        echo '</tr>';
                        echo '<tr><td>' . $dnsRecords[3]['host'] . '</td><td>' . $dnsRecords[3][type] . '</td><td>' . $dnsRecords[3][ttl] . '</td><td></td><td>' . $dnsRecords[3][mname] . ' ' . $convertedDomain . ' ' . $dnsRecords[3][serial] . ' ' . $dnsRecords[3][refresh] . ' ' . $dnsRecords[3][retry] . ' ' . $dnsRecords[3][expire] . ' ' . $dnsRecords[3][minimum-ttl] . '</td></tr>';
                        echo '<tr><td>' . $dnsRecords[1]['host'] . '</td><td>' . $dnsRecords[1][type] . '</td><td>' . $dnsRecords[1][ttl] . '</td><td></td><td>' . $dnsRecords[1][target] . '</td></tr>';
                        echo '<tr><td>' . $dnsRecords[2]['host'] . '</td><td>' . $dnsRecords[2][type] . '</td><td>' . $dnsRecords[2][ttl] . '</td><td></td><td>' . $dnsRecords[2][target] . '</td></tr>';
                        echo '<tr><td>' . $dnsRecords[0]['host'] . '</td><td>' . $dnsRecords[0][type] . '</td><td>' . $dnsRecords[0][ttl] . '</td><td></td><td>' . $dnsRecords[0][ip] . '</td></tr>';
                        echo '<tr><td>' . $dnsRecords[7]['host'] . '</td><td>' . $dnsRecords[7][type] . '</td><td>' . $dnsRecords[7][ttl] . '</td><td></td><td>' . $dnsRecords[7][ipv6] . '</td></tr>';
                        echo '<tr><td>' . $dnsRecords[4]['host'] . '</td><td>' . $dnsRecords[4][type] . '</td><td>' . $dnsRecords[4][ttl] . '</td><td>' . $dnsRecords[5][pri] . '</td><td>' . $dnsRecords[4][target] . '</td></tr>';
                        echo '<tr><td>' . $dnsRecords[5]['host'] . '</td><td>' . $dnsRecords[5][type] . '</td><td>' . $dnsRecords[5][ttl] . '</td><td>' . $dnsRecords[5][pri] . '</td><td>' . $dnsRecords[5][target] . '</td></tr>';

                        echo '</table>';

                    }
                    ?>
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
            <div class="section-titles text-left">
                 <h2 class="text-center">Domain Nameserver Lookup Tool</h2>
                 <p>Domain Nameserver Lookup Tool is a valuable resource for website owners and developers to inspect and retrieve crucial DNS information about any domain. With this tool, you can easily find details about a domain's nameservers, IP addresses, and other DNS records. Whether you're troubleshooting domain-related issues or conducting research, our tool simplifies the process of accessing essential domain information.</p>
<p>By using our Domain Nameserver Lookup Tool, you can gain insights into the backbone of a website's functionality – its nameservers. Check the DNS records, nameserver configurations, and more, all in one place. Stay informed about your own domains or explore the DNS infrastructure of any website. Empower your web management tasks with accurate and up-to-date domain nameserver data.</p>
            </div>
    </div>
<?php include('footer.php');?>
</body>
</html>