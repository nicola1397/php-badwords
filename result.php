<?php 

$paragraph = $_GET["paragraph"];
$tocensor = $_GET["toCensor"];

$censored = str_replace($tocensor, "***", $paragraph);
echo $censored;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
</body>
</html>