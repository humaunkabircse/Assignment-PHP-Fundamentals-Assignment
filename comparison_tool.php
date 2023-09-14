<!--
Task 6: Comparison Tool
Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.
-->
<?php

    $num1 = $num2 = $result = "";
    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $result = ($num1 > $num2) ? $num1:$num2;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>   
    <div class="container">
        <h1>Comparison Tool</h1>
        <form action="comparison_tool.php" method="POST">
            <div class="form-group">
                <label for="name">Number 1</label>
                <input type="number" class="form-control" name="num1" placeholder="Enter Number 1">
            </div>

            <div class="form-group">
                <label for="name">Number 2</label>
                <input type="number" class="form-control" name="num2" placeholder="Enter Number 2">
            </div>
            <button type="submit" class="btn btn-primary">Compare</button>

            <div class="form-group">
                <h3>Result: <?php echo $result; ?></h3>
            </div>


        </form>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>