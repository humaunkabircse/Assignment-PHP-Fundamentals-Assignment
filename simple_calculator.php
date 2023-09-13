<!--
Task 7: Simple Calculator
Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.
-->

<?php

    $num1 = $num2 = $result = $operation = "";

    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch($operation){
            case "add":
                $result = $num1 + $num2;
                break;

            case "sub":
                $result = $num1 - $num2;
                break;

            case "mul":
                $result = $num1 * $num2;
                break;

            case "div":
                $result = $num1 / $num2;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Simple Calculator</h1>
           
    </div>
    
    <div class="container">
        <form action="simple_calculator.php" method="POST">
            <div class="form-group">
                <label for="name">First Number</label>
                <input type="number" class="form-control" name="num1" placeholder="First Number" required>
            </div>
            <div class="form-group">
                <label for="name">Second Number</label>
                <input type="number" class="form-control" name="num2" placeholder="Second Number" required>
            </div>

            <div class="form-group">    
                <label for="name">Select Operation</label>
                <select class="form-control" name="operation">
                    <option value="add" >Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                </select>
            </div>

            <div class="form-group">
                <h3>
                    <?php 
                        if(!empty($result)){
                            echo "First Number : $num1 , Second Number : $num2 , Result : $result";
                        }
                    ?>
                </h3>                
            </div>

            <button type="submit" class="btn btn-primary">Calculate Result</button>
        </form>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

