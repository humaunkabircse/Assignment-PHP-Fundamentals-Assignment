
<!--
Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.
 -->

 <?php

    $num1 = $result = "";
    
    if(isset($_POST['num1'])){
        $num1 = $_POST['num1'];

        $remainder = $num1 % 2;
        
        if($remainder == 0){
            $result = "Even";
        }
        else
        {
            $result = "Odd";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>   
    <div class="container">
        <h1>Even or Odd Checker</h1>
        <form action="even_odd_checker.php" method="POST">
            <div class="form-group">
                <label for="name">Enter A Number</label>
                <input type="number" class="form-control" name="num1" placeholder="Enter A Number">
            </div>

            <button type="submit" class="btn btn-primary">Check</button>

            <div class="form-group">
                <h3> <?php echo "Your Number is " .$num1. "  Result:". $result; ?></h3>
            </div>

        </form>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>