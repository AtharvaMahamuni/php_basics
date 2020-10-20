<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP tutorial</title>
</head>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .container {
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
  }
</style>

<body>
  <div class="container">
    <h1>Let's learn about php</h1>

    <p>Your party status is here...</p>
    <?php
    //Conditionals:

    $age = 7;
    if ($age > 18) {
      echo "You can go to party";
    } else if ($age == 7) {
      echo "You are 7 years old.";
    } else {
      echo "You can't go to the party";
    }
    ?>

    <br>
    <h4>This is an array</h4>
    <?php
    //Arrays
    $languages = array("Python", "C++", "PHP", "NodeJS");
    echo $languages[0];
    echo "<br>";

    echo $languages[1];
    echo "<br>";

    echo $languages[2];
    echo "<br>";

    echo "count of elements: ";
    echo count($languages);
    echo "<br>";
    echo "<br>";

    //Loops in PHP
    // $a = 0;
    // while ($a <= 10) {
    //   echo "The value of a is: ";
    //   echo $a;
    //   echo "<br>";
    //   $a++;
    // }


    // Iterating arrays in PHP using while loop
    // $a = 0;
    // while ($a < count($languages)) {
    //   echo "The value of language is: ";
    //   echo $languages[$a];
    //   echo "<br>";
    //   $a++;
    // }

    // Iterating arrays in PHP using do while loop
    // $a = 0;
    // do {
    //   echo "The value of language is: ";
    //   echo $languages[$a];
    //   echo "<br>";
    //   $a++;
    // } while ($a < count($languages));

    // Iterating arrays in PHP using for loop
    // $a = 0;
    // for ($a = 0; $a < count($languages); $a++) {
    //   echo "The value of language is: ";
    //   echo $languages[$a];
    //   echo "<br>";
    // }

    // Iterating arrays in PHP using for-each loop
    // foreach ($languages as $values) {
    //   echo "The value of language is: ";
    //   echo $values;
    //   echo "<br>";
    // }


    // Function defination
    function print5()
    {
      echo "Print FIVE";
      echo "<br>";
    }

    // FUnction call
    print5();
    print5();
    print5();


    function print_number($number)
    {
      echo "<br> Your number is ";
      echo $number;
    }
    print_number(5);
    print_number(15);
    print_number(51);

    ?>


  </div>

</body>

</html>