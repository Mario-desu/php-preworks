
<?php 

$hostname = "127.0.0.1"; // this is the hostname that you can find in the PhpMyAdmin and you can write "localhost" too
$username = "root"; // be default the userName for the databases is root
$password = ""; // by default there is not password in the databases
$dbname = "db_test" ; // here we need to write the Database name

// create connection, you need to be aware of the order of the parameters
$connect = new mysqli($hostname, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}else {

    // echo "Successfully Connected";

}

// $sql = "SELECT * FROM test";


// $result = mysqli_query($connect, $sql);

// $rows = $result->fetch_all(MYSQLI_ASSOC);


// foreach ($rows as $value) {
//     echo  "<p>" .$value['first_name']." ".$value[ 'last_name'  ]."</p>";
//  }

 
// $result2 = mysqli_query($connect, $sql);

// while ($row = mysqli_fetch_array($result2 , MYSQLI_ASSOC)){

//     echo "<p>" .$row[ 'first_name']." ".$row['last_name'  ]."</p>";

// }


// $result3 = mysqli_query($connect, $sql);

// while ($row = mysqli_fetch_assoc($result3 )){

//     echo "<p>" .$row[ 'first_name']." ".$row['last_name'  ]."</p>";

// }