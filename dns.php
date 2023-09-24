<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Information Lookup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Domain Information Lookup</h1>
        <form method="post">
            <label for="domain">Enter Domain:</label>
            <input type="text" id="domain" name="domain" required>
            <button type="submit">Lookup</button>
        </form>
        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $domain = $_POST["domain"];

            $nsRecords = dns_get_record($domain, DNS_NS);
            $dnsRecord = dns_get_record($domain, DNS_ALL);

            print_r($dnsRecord);

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
            
            $data = json_decode($response, true);
            
            $domainName = $data["Domain Name"];
            $registryDomainID = $data["Registry Domain ID"];
            $registrarWhoisServer = $data["Registrar WHOIS Server"];
            $registrarURL = $data["Registrar URL"];
            $updatedDate = $data["Updated Date"];
            $creationDate = $data["Creation Date"];
            $registryExpiryDate = $data["Registry Expiry Date"];
            $registrar = $data["Registrar"];

            if ($nsRecords) {
                echo "<p>Nameservers for $domain:</p>";
                echo "<ul>";
                foreach ($nsRecords as $nsRecord) {
                    $ipapi = file_get_contents('http://ip-api.com/json/' . gethostbyname($nsRecord['target']) . '?fields=2');
                    $ipapidc = json_decode($ipapi, true);
                    echo "<li>" .$nsRecord['target'] .'-'. gethostbyname($nsRecord['target']) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No nameserver records found for $domain</p>";
            }

            if (!empty($dnsRecord[0]['ip'])) {
                echo "<p>Hosting IP Address: " . $dnsRecord[0]['ip'] . "</p>";
            } else {
                echo "<p>Hosting IP Address not found</p>";
            }

        }
        ?>
    </div>
</body>
</html>
