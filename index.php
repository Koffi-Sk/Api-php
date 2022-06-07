<?php

try {
    if (!empty($_GET["demande"])) {
        $url = explode("/", filter_var($_GET['demande'],FILTER_SANITIZE_URL));
       /*
        echo "<pre>";
        print_r($url);
        echo "</pre>";
        */
    } else {
        throw new Exception ("Problème de récupération de données.");
    }
} catch (Exception $e) {
    $error = [
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];
    print_r($error);
}