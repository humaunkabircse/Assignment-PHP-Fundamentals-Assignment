<!--
Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 
Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Grade Calculator</h1>
            <?php
                if(isset($_POST['test1']) && isset($_POST['test2']) && isset($_POST['test3'])){
                    $test1 = $_POST['test1'];
                    $test2 = $_POST['test2'];
                    $test3 = $_POST['test3'];

                    $average = ($test1 + $test2 + $test3) / 3;

                    if($average >= 90){
                        $grade = 'A';
                    }
                    elseif($average >= 80){
                        $grade = 'B';
                    }
                    elseif($average >= 70){
                        $grade = 'C';
                    }
                    elseif($average >= 60){
                        $grade = 'D';
                    }
                    else{
                        $grade = 'F';
                    }
                    echo "The average is " . $average . " and the grade is " . $grade;
                }
                
            ?>
    </div>
    
    <div class="container">
        <form action="grade_calculator.php" method="POST">
            <div class="form-group">
                <label for="name">Test 01</label>
                <input type="number" class="form-control" name="test1" placeholder="Enter Test 01 Score">
            </div>

            <div class="form-group">
                <label for="name">Test 02</label>
                <input type="number" class="form-control" name="test2" placeholder="Enter Test 02 Score">
            </div>

            <div class="form-group">
                <label for="name">Test 03</label>
                <input type="number" class="form-control" name="test3" placeholder="Enter Test 03 Score"> 
            </div>
                
            <button type="submit" class="btn btn-primary">Grade Calculate</button>
        </form>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>