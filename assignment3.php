<?php 

	function __autoload($class) {
    require_once $class . '.php';
  }

?>

<!doctype html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Assignment 3</title>
  	<link rel="stylesheet" href="assignment3.css">
  </head>
  <body>
    <?php 
      $nameErr = $name = "";
      $food = NULL;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
        }

        if (isset($_POST['food']) && is_array($_POST['food'])) {
          $food = $_POST['food'];
        }
      }
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    ?>
  	<p><span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Name: <input type="text" name="name">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      Pick a food you like, or none <br>
      <input type="checkbox" name="food[]" value="sushi"> sushi　
      <input type="checkbox" name="food[]" value="tempura"> tempura
      <input type="checkbox" name="food[]" value="udon"> udon
      <br><br>  
      <input type="submit" name="submit" value="Submit">

    </form>
    <?php
      $person = new ParentClass($name);
      $person2 = new ChildClass($name,$food);
      if((strlen($name)>0) && (isset($food))){
        echo $person2;
      }
      else if(strlen($name)>0){
        echo isset($food);
        echo $person;
      }
      
    ?>
  </body>
</html>