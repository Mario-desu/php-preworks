<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>
   <?php
       $i = 0;
        while($i < 10)
       {
           $i++;
           if($i == 3) break;
       }
        echo ("Loop stopped at i = $i");
       //Output:
       //Loop stopped at i=3
       echo "<br>";
       ?>


       <?php
       $array = array(1 , 2, 3, 4, 5 );
        foreach($array as $value)
       {
           if($value == 3) continue;
            echo "Value is $value <br/>";
       }
       // Output:
       // Value is 1
       // Value is 2
       // Value is 4
       // Value is 5
       ?>
   </body>
</html>