<?php

// Get request URI
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$uri = trim($uri, "/");

$uri_array = explode("/", $uri);

// Routes
if (str_starts_with($uri, "stock/items")) {
    $item_id = (int) end($uri_array);
    header("Location: https://stock.sectioninformatique.ch/v2/items/"
        . $item_id);
    die();
}

?>