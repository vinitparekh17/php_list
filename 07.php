<?php

$a = 15;
$b = 25;

if ($a == $b) {
    # code...
    $p = "equal";
}
else {
    $p = "not equal";
}

$bc = $_GET["test"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<h1><?php echo $p;?></h1>

<form method="get">
    <input type="text" name="test">
    <input type="submit" value="submit" onClick="handleSubmit">
</form>
<script>
    var a = document.querySelector("input").value;

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log(e);
    }
    console.log(a);
</script>
    
</body>
</html>