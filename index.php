<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Day 2 Classwork</title>
</head>
<body>

<!-- ***************************************************************************************************
*************************************************************************************************** -->

<!-- Exercise 1

Create a PHP script which will accept two parameters from the form (name and surname). 
The user must insert name and surname into the form to get the output: "Welcome Name Surname!" 
otherwise you will output the message: please insert your name, or please insert your surname. -->

<!-- <p>Please insert your name and surname</p>
       <form action="index.php" method= "GET">
           Name: <input type="text"  name="name" />
           Surname: <input type= "text" name="surName" />
           <input  type="submit" name="submit" />
       </form> -->
        <!-- <?php 
       if(isset($_GET[ 'submit']))
       {
           if( $_GET["name"] && $_GET["surName" ] )
           {
               echo "Welcome ". $_GET['name']. " ". $_GET['surName']. "<br />";
           } elseif( $_GET["name"]) 
           {
            echo "Please insert your surname" . "<br/>";
           } elseif($_GET["surName"]) 
           {
            echo "Please insert your name" . "<br/>";
           } else 
           {
            echo "Please insert your name and surname" . "<br/>";
           }
        } 
       ?>  -->


<!-- *****************************************************************************************
***************************************************************************************** -->

<!-- Exercise 2

Create a function which takes two integer parameters - divide them and output the result on the screen. -->
    
<!-- <p>Please insert numbers</p>
       <form action="index.php" method= "GET">
           Number 1: <input type="number"  name="number1" />
           Number 2: <input type= "number" name="number2" />
           <input  type="submit" name="submit" />
       </form> -->

<!-- <?php
      if(isset($_GET[ 'submit']))
      {
          if( $_GET["number1"] && $_GET["number2" ] )
          {
            $num1 = $_GET["number1"];
            $num2 = $_GET["number2"];
           function divideFunction($num1, $num2)
      {
          $divide = $num1 / $num2;
          return  $divide;
      }
          $returned_value = divideFunction($num1, $num2);
          echo "Returned value from the function: $returned_value";
          } else {
            echo "Please insert number" . "<br/>";
          }
         
       } 
?> -->

<!-- ********************************************************************************************
******************************************************************************************** -->

<!-- Exercise 3

Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. 
then make the calculation and print them on the screen. Make sure that the variables are numbers.
E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4 -->

<!-- <p>Please insert your grades for Math, Physics and English.</p>
       <form action="index.php" method= "GET">
           Math: <input type="number"  name="math" />
           Physics: <input type= "number" name="physics" />
           English: <input type= "number" name="english" />
           <input  type="submit" name="submit" />
       </form> -->
<!-- <?php
      if(isset($_GET[ 'submit']))
      {
          if( $_GET["math"] && $_GET["physics"] && $_GET["english"] )
          {
            $num1 = $_GET["math"];
            $num2 = $_GET["physics"];
            $num3 = $_GET["english"];
            function getSum($num1, $num2, $num3)
      {
          $sum = $num1 + $num2 + $num3;
          return  $sum;
      }   
          $returned_sum = getSum($num1, $num2, $num3);
          function getAvarage($returned_sum) 
     {
          $avarage = $returned_sum / 3;
          return $avarage;
     }
          $returned_avarage = getAvarage($returned_sum);
         
          echo "Sum: $returned_sum" . "<br/>";
          echo "Avarage: $returned_avarage"; 
          } else 
          {
            echo "Please insert number" . "<br/>";
          }
         
       } 
?> -->

<!-- ********************************************************************************************
******************************************************************************************** -->

<!-- Exercise 4

Create a function that calculates the area and volume of a box.
Formulas:
area = width x height
volume = width x height x depth
Pass three different numbers as arguments and get calculated results using the return statement.
You should get the following results:
The area of the box is: 14
The volume of the box is: 70 -->

<!-- <p>Please insert values of a box: width, height and depth.</p>
       <form action="index.php" method= "GET">
           Width: <input type="number"  name="width" />
           Height: <input type= "number" name="height" />
           Depth: <input type= "number" name="depth" />
           <input  type="submit" name="submit" />
       </form> -->

<!-- <?php
      if(isset($_GET[ 'submit']))
      {
          if( $_GET["width"] && $_GET["height"] && $_GET["depth"] )
          {
            $num1 = $_GET["width"];
            $num2 = $_GET["height"];
            $num3 = $_GET["depth"];
            function getArea($num1, $num2)
      {
          $area = $num1 * $num2;
          return  $area;
      }   
          $returned_area = getArea($num1, $num2);
          function getVolume($returned_area, $num3) 
     {
          $volume = $returned_area * $num3;
          return $volume;
     }
          $returned_volume = getVolume($returned_area, $num3);
         
          echo "The area of the box is: $returned_area" . "<br/>";
          echo "The volume of the box is: $returned_volume"; 
          } else 
          {
            echo "Please insert number" . "<br/>";
          }
         
       } 
?> -->

<!-- *****************************************************************************************************************************
****************************************************************************************************************************** -->

<!-- Exercise 5

Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)." -->

<!-- <p>Please insert the amount of minutes.</p>
       <form action="index.php" method= "GET">
           Minutes: <input type="number"  name="minutes" />
           <input  type="submit" name="submit" />
       </form> -->

<!-- <?php
      if(isset($_GET[ 'submit']))
      {
          if( $_GET["minutes"])
          {
            $min = $_GET["minutes"];
            function getHours($min)
      {
          $hours = floor($min / 60);
          $min1 = $min % 60;
          
          echo $min. "minutes = $hours" . " hour(s) and $min1" . " minute(s)." . "<br/>";
      }  
          getHours($min);

          } else 
          {
            echo "Please insert the amount of minures" . "<br/>";
          }
         
       } 
?> -->

<!-- *****************************************************************************************************************************
****************************************************************************************************************************** -->

<!-- Exercise 6

Create a form with input fields for your firstname, lastname and age. Extract the values from each input field and display them 
all in a separate div. Use the POST method.
If the length of your name is larger than 5 characters, change the text colour to green. Otherwise, change the text-colour to red.
Now extend with adding a new input field "hobbies".  -->

<!-- <p>Please fill in the following fields</p>
       <form action="index.php" method ="POST">
           Firstname: <input type="text"  name="firstName" />
           Lastname: <input type="text"  name="lastName" />
           Age: <input type ="text" name="age" />
           Hobbies: <input type ="text" name="hobbies" />
           <input  type="submit" name="submit"  />
       </form> -->

       <!-- <?php
       
       if( isset($_POST['submit']))
       {
           if( strlen($_POST["firstName"]) > 5)
           { 
            echo "<div class='success'> Your firstname is {$_POST['firstName']}.</div>"; 
           } else {
            echo "<div class='danger'> Your firstname is {$_POST['firstName']}.</div>"; 
           }
       }

       if( isset($_POST['submit']))
       {
           if( strlen($_POST["lastName"]) > 5)
           { 
            echo "<div class='success'> Your lastname is {$_POST['lastName']}.</div>"; 
           } else {
            echo "<div class='danger'> Your lastname is {$_POST['lastName']}.</div>"; 
           }
       }

       if( isset($_POST['submit']))
       {
           if( strlen($_POST["hobbies"]) > 5)
           { 
            echo "<div class='success'>{$_POST['hobbies']} is your hobby.</div>"; 
           } else {
            echo "<div class='danger'>{$_POST['hobbies']} is your hobby.</div>"; 
           }
       }

       if( isset($_POST['submit']))
       {
           if( $_POST["age"])
           { 
            echo "<div class='success'> You are {$_POST['age']} old.</div>"; 
           } else {
            echo "<div class='danger'> You are {$_POST['hobbies']} old.</div>"; 
           }
       } 
       ?> -->

<!-- *****************************************************************************************************************************
****************************************************************************************************************************** -->


<!-- Day 2 | Advanced
Advanced Exercise

Functions:

1- Create a function that can convert °F in °C and show the result on the screen. -->
<div class="bgCelsius <?= $class; ?>">
    <div class="celsius_text">
    <p>Please enter the temperature value in °F:</p>
        <form action="index.php" method= "GET">
           Fahrenheit: <input type="number" class="celsius_input"  name="celsius" />
           <input  type="submit" class="celsius_btn" name="submit" />
       </form> 

       <?php

        if(isset($_GET[ 'submit']))
        {
            if( $_GET["celsius"])
            {
                $c = $_GET["celsius"];
                function getC($c)
        {
            $cel = floor(($c - 32) * (5/9));
            return $cel;
            
        }  
            
            $returned_cel = getC($c);
            echo "<div> The temperature is {$returned_cel}°C outside!</div>"; 

            } else 
            {
                echo "<div> Please enter the value of temperature. </div>";
            }
        } 

        if( isset($_GET['submit']))
       {
           if( $returned_cel > 0 && $returned_cel < 5)
           { 
            echo "<div class='bgImg1'> Very cold!!! </div>";
           } elseif  ( $returned_cel > 5 && $returned_cel < 10){
            echo "<div class='bgImg2'> Cold! </div>";
           } elseif  ( $returned_cel > 10 && $returned_cel < 15){
            echo "<div class='bgImg3'> Pleasent! </div>";
           } elseif  ( $returned_cel > 15 && $returned_cel < 20){
            echo "<div class='bgImg4'> Warm! </div>";
           } elseif  ( $returned_cel > 21){
            echo "<div class='bgImg5'> Hot... </div>";
           } else {
            echo "<div class='bgImg6'> Something is wrong... </div>";
           }
       }

        ?> 

    </div>
        
        

<!-- 2- You can play with the results creating conditionals and showing on the screen a different img and message depending on the temp:
From 0°C to 5°C: Very cold
From 6°C to 10°C: Cold
From 11°C to 15°C: Pleasant
From 16°C to 20°C: Warm
Above 21°C: Hot -->
</div>

</body>
</html>