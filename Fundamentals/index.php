<?php
  // 1 - Variables
  $name = 'bossROD';
  $age = 23;
  $gender = 'Male';

  // 2 - Echo or Print
  echo "Name: $name <br>";
  echo 'Gender: '.$name.'<br>';
  print 'Age: '.$age.'<br>';

  // 3 - Data Types
  var_dump(99);
  var_dump('');
  var_dump(99.99);
  var_dump([]);
  var_dump(NULL);
  var_dump(true);
  echo '<br>';

  // 4 - Constant
  define('MESSAGE', 'Thank you for watching bossROD TV');
  echo MESSAGE.'<br>';

  // 5 - Operators
  // + , - , * , / , % , **

  // 6 - Functions
  function showMessage($message) {
    return $message;
  }

  echo showMessage('Hello mga boss!').'<br>';

  // 7 - Arrays
  $arr1 = ['boss', 'ROD', 'TV'];
  $arr2 = array('a' => 'boss', 'ROD', 'TV');

  print_r($arr1);
  echo '<br>';
  print_r($arr2);
  echo '<br>';
  echo "arr1: $arr1[0] <br>";
  echo "arr2: $arr2[0] <br>";

  // 8 - Conditions
  // if (1 === '1') {
  //   echo 'CORRECT <br>';
  // } else {
  //   echo 'WRONG <br>';
  // }
  
  echo 1 == 1 ? 'CORRECT <br>' : 'WRONG <br>';

  switch($age) {
    case 23:
      echo 'Twenty Three <br>'; break;
    case 22: 
      echo 'Twenty Two <br>'; break;
    default:
      echo 'No age <br>';
  }

  // 9 - Loops
  echo "WHILE <br>";

  $rod1 = 1;

  while ($rod1 <= 4) {
    echo "current rod1: $rod1 <br>";

    $rod1 = $rod1 + 1;
  }

  echo "DO WHILE <br>";

  $rod2 = 1;

  do {
    echo "current rod2: $rod2 <br>";

    $rod2 = $rod2 + 1;
  } while ($rod2 <= 5);

  echo "FOR <br>";

  for ($rod3 = 0; $rod3 <= 5; $rod3++) {
    echo "current rod3: $rod3 <br>";
  }

  echo "FOREACH <br>";

  $rod4 = ["Code", "with", "boss", "ROD"];

  foreach ($rod4 as $key => $value) {
    echo "current rod4: $key-$value <br>";
  }

  // 10 - Forms
  $id = $_POST["id"];

  echo "id: $id <br>";

  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "bossROD";
  $port = 3307;

  $connection = mysqli_connect($host, $user, $password, $database, $port);

  $queryRead = "SELECT * FROM users";
  $sqlRead = mysqli_query($connection, $queryRead);

  // if (mysqli_num_rows($sql) > 0) {
  //   for ($r = 1; $r <= mysqli_num_rows($sql); $r++) {
  //     $results = mysqli_fetch_array($sql);
    
  //     echo "Name: ".$results["name"]."<br>";
  //     echo "Age: ".$results["age"]."<br>";
  //   }
  // } else {
  //   echo "No records found!";
  // }

  // if (mysqli_num_rows($sql) > 0) {
  //   while ($results = mysqli_fetch_array($sql)) {
  //     echo "Name: ".$results["name"]."<br>";
  //     echo "Age: ".$results["age"]."<br>";
  //   }
  // } else {
  //   echo "No records found!";
  // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/PHPTutorialbybossROD/index.php" method="POST">
    <input type="text" name="id" value="" />
    <input type="submit" value="Click" />
  </form>
</body>
</html>