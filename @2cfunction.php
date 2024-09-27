<?php 
function ADD($repn1,$repn2){
    $sum = $repn1 + $repn2;
    return $sum;
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
    <form action="" method="post">
        <label for="">First Name</label>
        <input type="number" name="n1" id="">
        <label for="">Second Name</label>
        <input type="number" name="n2" id="">
        <input type="submit" value="Calculate" name="btn_calculate">
</Form>

<?php
if (isset($_POST['btn_calculate'])){
    $number1=$_POST['n1'];
    $number2=$_POST['n2'];
    $result=ADD($number1,$number2);
    echo "The sum of $number1 and $number2 is $result";
}
?>
</body>
</html>