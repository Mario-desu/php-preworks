<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>
       <form action="hello-world-form-post.php"  method ="POST">
           Name: <input type="text"   name="name" />
           Age: <input type ="text"  name="age" />
           Email: <input type="email" name="email"/>
           <input  type="submit"  name="submit"  />
        </form>
       <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["name"] || $_POST["age"] || $_POST["email"] )
           {
               echo "Welcome ". $_POST[ 'name']. "<br />" ;
               echo "You are " . $_POST['age']. " years old.<br>" ;
               echo "This is your E-mail-address: ". $_POST['email'];
           }
       }
    //    var_dump( $GLOBALS );
       ?>
   </body>
</html>