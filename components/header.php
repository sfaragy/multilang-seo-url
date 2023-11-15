<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom PHP project multi language support</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    $url = $_SERVER['REQUEST_URI'];

    $urlParts = explode('/', $url);

    $lang = 'en';
    if(isset($urlParts[1]) && strlen($urlParts[1]) =='2'){
        $lang = $urlParts[1];
    }

    $language = require_once("lang/" . $lang .".php");