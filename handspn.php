<?php 
function AREA($r){
    $PI = 3.1416;
    $a = $PI*($r*$r);
    return $a;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        <label for="">enter a radius</label>
        <input type="number"name="area">
        <input type="submit" name="btn" value="submit">
    </form>
    <?php 
    if (isset($_POST['btn'])){
        $radius = $_POST['area'];
        $result = AREA($radius);
        echo" The area of circle is $result";
    }
    ?>
</body>
</html>