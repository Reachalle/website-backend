<?php
echo "my website <br>";

$myName='evans';

var_dump($myName);

$yearsofExperience=5;

echo"<br>";

var_dump($yearsofExperience);

$heihgt = 6.1;

echo "<br>";


// 31/10/2024

//operators
//arithmetic operators
$x = 10;
$y = 5;

echo $x + $y;
echo $x - $y;

echo "<br>";
echo $x * $y;
echo "<br>";

echo$x / $y;
echo"<br>";

echo $x % $y;
echo"<br>";

echo $x ** $y;
echo"<br>";

//increment and decrement operators
$x++;

echo $x;

$x--;

echo $x;

 //assignment operators

 $a = 100;
 $b = 50;

 // addition assignment
 $a += $b;
 echo "<br>";
 echo $a;

 //subtraction assignment
 $a -= $b;

echo "<br>";
echo $a;

//logical operators
 // examples of logical operators are:AND(&&) , OR(||), XOR, NO
 echo "<br>";
if ($a == 100 && $b == 50) {
  echo "we are good to go.";   # code...
 }
 echo "<br>";
 if ($a == 100 || $b == 50 ) { echo "we good to go.";
    # code...
 }
 if ($a == 100 xor $b == 55 ) { "we are good to go.";
    # code...
 }
echo "<br>";
if (!($a == 101) ) { 
    echo "we are good to go.";
}
 // 11/7/2024

 // PHP conditional statements
 //there are four notable conditional statementsin php viz

 // if statement

 // if else statement

 // else if statement

 // switch statement


 // if statement
 // ____________

 // the if statement is among the most important statement in php

 // example:
 //____________
 if (7>3) {
     echo "Have a good day";
 }

    echo "<br>";
 // variable declaration
 
 $my_name ="abkpt";

  $present_time = date (format: "H:i");
 
 echo "<br>";

 echo "present_time:  $present_time <br>";


 if ($present_time >= 00.00 && $present_time < 12.00) {
 echo "<h3> Good morning  $my_name! </h3>"; 
 }

 elseif ($present_time >= 12.00 && $present_time < 16.00) {
 echo "<h3> Good afternoon $my_name! </h3>";
 }
 elseif ($present_time >= 12.00 && $present_time < 23.59) {
 echo "<h3> Good night $my_name! </h3>"; 
 }

 else { 
   echo "<h3> Hello, $my_name! </h3>";
 }

 
 //switch statement
 // ________________

  $today = date (format: "D");
  echo "today is: $today <br>";


  switch ($today) {
     case "Mon": 
         echo "hello everybody, it's $today. have a great week!";   
         break;
     case "Tue": 
         echo "hello everybody, it's $today. have a great week!";   
         break;
     case "Wed": 
         echo "hello everybody, it's $today. have a great week!";   
         break;
     case "Thu": 
         echo "hello everybody, it's $today. have a great week!";   
         break;
     case "Fri": 
         echo "hello everybody, it's $today. have a great week!";   
         break;
     case "Sat": 
         echo "hello everybody, it's $today. have a great week!";   
         break;
     case "Sun": 
         echo "hello everybody, it's $today. have a blessed week!";   
         break;
 
}

echo "<br>";


 // php loops

 // --while loops


  $j = 2;
  while ($j <= 8) {
       echo $j;
       $j++;
  }
 
 
 // --do...while loops

 // --for -loops

  /*$number = 1;
   While ($numbers <= 10) {
        echo $numbers."<br>";
        $numbers++;
    } */

    // do while loop
    /* $number = 1;
    do {
        echo $numbers."<br>";
        $numbers++;
    }while ($numbers <= 10 ) */
    
    // for loops

    for ($numbers = 1; $numbers<= 10; $numbers++) {
        echo $numbers."<br>";
    }

    // for each

    /*$cars = array("BMW", "ferrari", "lexus","toyota");
    echo "i love $cars[0] <br>";
    echo "i love $cars[1] <br>";
    echo "i love $cars[2] <br>";
    echo "i love $cars[3] <br>";*/

    $cars = array ("BMW","lexus", "toyota");
    foreach ($cars as $cars) {
        echo "i love $cars <br>";   
    }

    // 15/11/24
    // Array
    $domesticAnimal = array ('Dog','Cat','Horse','Goat', 'cow');
    $Cities = ["Asaba", "Warri", "Ughelli", "Sapele", "Agbor"];
      echo "<br>" . $domesticAnimal [0] .'<br>';


    // index array
    // association array
    // multi-dimensional array

    // count
    echo count($domesticAnimal) . '<br>';

    // array-push
    array_push($Cities, 'Abraka');

    var_dump($Cities);

    $Cities[2] = 'sapele';
    echo '<br>';
    var_dump($Cities);

    // associative array
    $phone = ['brand' => 'iphone', 'model'=> '14 pro', 'color'=> 'white', 'Rom'=> 256];
    echo '<br>';
    var_dump($phone);
    $phone["model"] ='15 pro';
    echo '<br>';
    var_dump($phone);

    // 18/11/24
    // function
    function greetMe() {
        echo "good afternoon";
    }
    greetMe();

    function streetName ($sname) {
        echo "$sname Asaba. <br>";
    } 

    streetName("DLA");
    streetName("ezenei");

    function HomeAddress ($snumber, $sname) {
        echo "$snumber street $sname Asaba. <br>";
    }

    HomeAddress("5th" ,"DLA");
    HomeAddress("7th" , "Ezenei"); 




    ?>