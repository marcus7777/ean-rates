$apiKey = '15qo09ab6dge7cdp04nu3kcav5';
$secret = 'cvh43jpjctvt2';
$timestamp = gmdate('U'); // 1427233130 (Tue, 24 Mar 2015 21:38:50 +0000)
$sig = md5($apiKey . $secret . $timestamp);
$add_to_url = "&apiKey=" . $apiKey . "&sig=" . $sig;
