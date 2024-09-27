<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days Of Week Activity</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<style>
        body {
            background-color:#A7BEAE;
            font-family: arial, serif;
            background-image: url('baby.jpg');
            background-size:cover;
            background-position:fixed;
            background-repeat: no-repeat;
            background-attachment:fixed;
        }
        .container {
            min-width: 350px;
            max-width: 350px;
            margin: 10px ;
            padding: 20px 20px 40px 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            background-color: #E7E8D1;
            box-shadow: 0 10px 10px rgba(10,11,12,0.2);
        }
        h1 {
            color: #5b9aa0 ;            
        }
        .button-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .button-group button {
            margin: 10px;
            background-color: #C4DFE6;
        }
        .selected-day {
            font-weight: bold(30);
            color: #a96e5b;
        }
    </style>
    <div class="container">
    <h1 style="text-align:center;">Days of the Week </h1>
        <form method="post">
            <div class="button-group">
                <button type="submit" name="day" value="Monday">Monday</button>
                <span class="selected-day"><?php if (isset($_POST['day']) && $_POST['day'] == 'Monday') echo "huy! it's Monday"; ?></span>
            </div>
            <div class="button-group">
                <button type="submit" name="day" value="Tuesday">Tuesday</button>
                <span class="selected-day"><?php if (isset($_POST['day']) && $_POST['day'] == 'Tuesday') echo "huy! it's Tuesday"; ?></span>
            </div>
            <div class="button-group">
                <button type="submit" name="day" value="Wednesday">Wednesday</button>
                <span class="selected-day"><?php if (isset($_POST['day']) && $_POST['day'] == 'Wednesday') echo "huy! it's Wednesday"; ?></span>
            </div>
            <div class="button-group">
                <button type="submit" name="day" value="Thursday">Thursday</button>
                <span class="selected-day"><?php if (isset($_POST['day']) && $_POST['day'] == 'Thursday') echo "huy! it's Thursday"; ?></span>
            </div>
            <div class="button-group">
                <button type="submit" name="day" value="Friday">Friday</button>
                <span class="selected-day"><?php if (isset($_POST['day']) && $_POST['day'] == 'Friday') echo "huy! it's Friday"; ?></span>
            </div>
        </form>
    </div>
    <?php
    ?>
</body>
</html>