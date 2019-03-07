<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

   <h1>A SIMPLE CALCULATOR.</h1>
      <form action="prac.php" method="post">
          first num: <input type="number" step="0.0001" name="num1"> <br><br>
          operation(+,-,/,*): <input type="text" name="op"> <br><br>
          second num: <input type="number" step="0.0001" name="num2"> <br><br>
          <input type="submit">
          </form>
      <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      if($op == "+" ){
          echo $num1 + $num2;
      }
      elseif($op == "-"){
          echo $num1 - $num2;
      }
      elseif($op == "*"){
          echo $num1 * $num2;
      }
      elseif($op == "/"){
          echo $num1 / $num2;
      }
      else {
          echo "inavalid operator";
      }
      ?>
  </body>
</html>
