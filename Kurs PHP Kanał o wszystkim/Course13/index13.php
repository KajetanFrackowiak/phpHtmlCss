<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Lesson 13</title>
</head>
<body>
<style>
    * {
        font-family: sans-serif;
        text-align: center;
    }

    table {
        display: inline-block;
        border: 1px solid #999;
        border-collapse: collapse;
    }

    td, th {
        border: 1px solid #999;
        padding: 5px;
    }
</style>
<h3>Include & Require</h3>
<?php
include 'process13.php';
include_once 'process13.php';
require 'process13.php';
?>
<br>Next intructions ..
</body>
</html>