<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            background-color:#078282FF;
            font-family: Georgia, serif;
            font-size: 14px;
            background-image: url('20240507_211053.jpg');
            background-size:cover;
            background-position:fixed;
            background-repeat: no-repeat;
            background-attachment:fixed;
        }
        .container {
            max-width: 400px;
            margin: 100px auto; 
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 40px;
            background-color: #95dbe5ff;
            box-shadow: 30px 30px rgba(10,11,12,);           
        }
        h1 {
            color:#024950 ;
        }
        .form-group{
            margin-bottom: 20px;
        }
        .btn-primary: hover{
            background-color:green;
        }
    </style>
    <div class="container">
        <h1 style="text-align:center;">Operations</h1>
        <form method="post">
            <div class="Form-group">
                <label for="No1">Enter a number:</label>
                <input type="number" class="form-control" id="No1" name="No1" required>
            </div>
            <div class="form-group">
                <label for="No2">Enter another number:</label>
                <input type="number" class="form-control" id="No2" name="No2" required>
            </div>
            <button type="Calculate" class="btn btn-primary">Calculate</button>
            <div id="result" style="Text-align:Center;"></div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $No1 =  $_POST["No1"];
            $No2 =  $_POST["No2"];
            $sum = $No1 + $No2;
            $difference = $No1 - $No2;
            $product = $No1 * $No2;
            $quotient = $No1 / $No2;
            echo "<h3>Results:</h3>";
            echo "<p>Sum: $sum</p>";
            echo "<p>Difference: $difference</p>";
            echo "<p>Product: $product</p>";
            echo "<p>Quotient: $quotient</p>";
            echo "</div>";
        }
        ?>
</body>
</html>