<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET" action="advanced_ex.php"> 
Value in °F: <br>
<input type="text" name="fahrenheit"><br> 
<input type="submit" name="submit" value="convert">
</form>

<?php


$fahrenh = $_GET["fahrenheit"];;

function conversion($fahrenh){
    $celsius = ($fahrenh -32) * 5/9;
    return $celsius;
}



$fahrenh = 75;
$result = conversion($fahrenh);
$result = round($result,2);

?>
    
</body>
</html>