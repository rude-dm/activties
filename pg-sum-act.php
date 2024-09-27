<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
    <style>
        body {
            background-color: #1F2833;
            font-family: Arial, sans-serif;
            background-image: url('char.jpg');
            background-size:cover;
            background-position:fixed;
            background-repeat: no-repeat;
            background-attachment:fixed;
        }
        .container {
            max-width: 450px;
            margin: 100px auto;
            padding: 30px;
            background-color: #45a29e;
            border: 1px solid #CCC;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color:#212a31;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group{
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Sum</h1>
        <form method="post">
            <div class="form-group">
                <label for="num1"> 1.</label>
                <input type="number" class="form-group" id="num1" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">2.</label>
                <input type="number" class="form-group" id="num2" name="num2" required>
                
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
            <div id="result" style="text-align: center;"></div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum";
        }
        ?>
    </div>
</body>
</html>