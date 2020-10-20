<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>

<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI', 3.14);

        echo "Hello World this is printed using php.";
        //single line comment
        /*Multi
            line 
        comment */

        //Variables:
        $variable = 34;
        $variable2 = 45;

        echo $variable + $variable2;

        //Operators in php
        //Arithmatic operators
        echo "<br>";
        echo "Sum of variable1 + variable 2 = ";
        echo $variable + $variable2;
        echo "<br>";
        echo "Difference of variable1 + variable 2 = ";
        echo $variable - $variable2;
        echo "<br>";
        echo "Product of variable1 + variable 2 = ";
        echo $variable * $variable2;
        echo "<br>";
        echo "Division of variable1 + variable 2 = ";
        echo $variable / $variable2;
        echo "<br>";

        //Assignment Operators
        $newvar = $variable;

        // $newvar += 1;
        // $newvar -= 1;
        // $newvar *= 2;
        // $newvar /= 2;

        echo "The value of new variable is = ";
        echo $newvar;
        echo "<br>";

        //Comparison Operators
        // echo "<h1> Comparison Operator</h1>";

        // echo "The value of 1==4 is";
        // echo var_dump(1 == 4);
        // echo "<br>";

        // echo "The value of 1!=4 is";
        // echo var_dump(1 != 4);
        // echo "<br>";

        // echo "The value of 1>=4 is";
        // echo var_dump(1 >= 4);
        // echo "<br>";

        // echo "The value of 1<=4 is";
        // echo var_dump(1 <= 4);
        // echo "<br>";


        //Increament/Decrement operators
        // echo $variable++;
        // echo "<br>";

        // echo $variable--;
        // echo "<br>";

        // echo ++$variable;
        // echo "<br>";

        // echo --$variable;
        // echo "<br>";


        //Logical Operators
        // $myVar = (true) && (true);
        // echo $myVar;
        // echo "<br>";

        // $myVar = (false) || (true);
        // echo $myVar;
        // echo "<br>";

        // $myVar = (false and true);
        // echo $myVar;
        // echo "<br>";

        // $myVar = (true or false);
        // echo $myVar;
        // echo "<br>";

        ?>
        <?php
        //Data types in php 
        // 1. String 
        // 2. Integer
        // 3. Float 
        // 4. Boolean 
        // 5. Array 
        // 6. Object 

        // echo "<br> Data Types <br>";

        // $var = "This is a string";
        // echo var_dump($var);
        // echo "<br>";

        // $var = 34;
        // echo var_dump($var);
        // echo "<br>";

        // $var = 21.5;
        // echo var_dump($var);
        // echo "<br>";

        // $var = false;
        // echo var_dump($var);
        // echo "<br>";


        // Constants defined at top
        echo PI;



        echo "<br>";
        echo "Hello World again";
        ?>
    </div>
</body>

</html>