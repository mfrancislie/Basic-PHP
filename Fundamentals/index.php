<?php
  // 1 - Variables
  $name = 'bossitem';
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
  define('MESSAGE', 'Thank you for watching bossitem TV');
  echo MESSAGE.'<br>';

  // 5 - Operators
  // + , - , * , / , % , **

  // 6 - Functions
  function showMessage($message) {
    return $message;
  }

  echo showMessage('Hello mga boss!').'<br>';

  // 7 - Arrays
  $arr1 = ['boss', 'item', 'TV'];
  $arr2 = array('a' => 'boss', 'item', 'TV');
  
  print_r($arr1);
  echo '<br>';
  print_r($arr2);
  echo '<br>';
  echo "arr1: $arr1[0] <br>";
  echo "arr2: $arr2[0] <br>";

  $arr3 = [1,6,4,7,2,5,9,8, 10];//to fix the problem is to use sort()
  /* 
   sort() = automatic fix na sya by ascending 
   rsort() = automatic fix na sya by descending
  */
  sort($arr3);


  // 8 - Conditions
  if (1 === '1') {
    echo 'CORRECT <br>';
  } else {
    echo 'WRONG <br>';
  }
  
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

  $item1 = 1;

  while ($item1 <= 4) {
    echo "current item1: $item1 <br>";

    $item1 = $item1 + 1;
  }

  echo "DO WHILE <br>";

  $item2 = 1;

  do {
    echo "current item2: $item2 <br>";

    $item2 = $item2 + 1;
  } while ($item2 <= 5);

  echo "FOR <br>";

  for ($item3 = 0; $item3 <= 5; $item3++) {
    echo "current item3: $item3 <br>";
  }

  echo "FOREACH <br>";

  $item4 = ["Code", "with", "boss", "item"];

  foreach ($item4 as $key => $value) {
    echo "current item4: $key-$value <br>";
  }

  
  $data = array("mango", "apple", "orange");
  // print_r($data);// print_r is for array
  $total = count($data);

  echo "The total data is ".$total;

  for($i = 0; $i < $total; $i++){
    echo $data[$i]. "<br/>";
  }
  
  // Date and Time
 
  echo date_default_timezone_get();
  echo date('Y-m-d, h:i:s a');

  // convert this given date
  $date = "October 02, 2023 03:43:00 PM";
  echo date('m/d/Y, H:i:s a', strtotime($date));


  /* 
  h - is for 12 hours
  H - is for 24 hours or military time
  i - is for minutes
  s - is form leading zero
  a - is for AM 
  
  date_default_timezone_get();
  The defualt datetime is from Aurope/berlin


  date_default_timezone_set('Asia/Manila');
  To change datetime to philippine time is to use _set()

  To convert this given date is to use strtotime()
  $date = "October 02, 2023 03:43:00 PM";
  echo date('m/d/Y, H:i:s a', strtotime($date))

  */


// Different between include() and include_once()
/* 
  For example include()

  include(function.php);
  include(function.php);

  Ang Process ni php is kung ano yong nasa baba syan rin yong babasahin nya
  which is yan yong pinagkaiba ni include()



  For example include_once()

  include_once(function.php);
  include_once(function.php);
  For example same lang yong ini include_once() na file, 
  automatic ma didisregard yong nasa baba



 */



 // 10 - class and OOP

/*  
  this - is represent by class person 

  include_once(class-oop.php);

  $person = new person();
  echo $person->$get_name();
  result: momo

  to update new name pwedi ra inganion
  $person = new person();
  $person->set_name("francis");
  echo $person->$get_name();
  

  
*/



  // 11 - Forms
  $id = $_POST["id"];

  echo "id: $id <br>";

  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "bossitem";
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
  <form action="/PHPTutorialbybossitem/index.php" method="POST">
    <input type="text" name="id" value="" />
    <input type="submit" value="Click" />
  </form>
</body>
</html>

