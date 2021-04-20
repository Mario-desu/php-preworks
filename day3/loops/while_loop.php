
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
       $num = 50;
       while($i < 10)
       {
           $num--;
           $i++;
       }
       echo ("Loop stopped at i = $i and num = $num");
       // Output:
       // "Loop stopped at i = 10 with num = 40"
       ?>
   </body>
</html>