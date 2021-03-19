<html>
<head>
<meta charset="UTF-8">
<title>test</title>
<link rel="stylesheet" href="style.css">

<!-- script file import -->
<script type="text/javascript" src="fib.js"></script>

<!-- connection to database -->
<?php
  include 'db_connection.php';
  $conn = OpenCon();
?>
</head>

<body>
  <div class="top">
    <a href="#popup" class="header">Test</a>
  </div>

  <div id="popup" class="popup">
    <a href="#header" class="popup_area"></a>
    <div class="popup_body">
      <div class="popup_content">
        <a href="#header" class="popup_close">x</a>
        <div class="popup_title">Введите порядок числа фибоначи: </div>
        <div class="popup_calc">
          <form>
            <input type="text" name="num" placeholder="number to calculate">
            <button name="submit" type="submit" value="submit">OK</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="res"> Result:
  <!-- calculation funcion -->
  <?php
    function Fibonacci($number){
      // if and else if to generate fixed results
      if ($number == 0){
        return 0;
      }
      else if ($number == 1){
        return 1;
      }
      // recursion
      else{
      // by the way, seems like fibonacci result of 12 is not 89, but 144
        return (Fibonacci($number-1) + Fibonacci($number-2));
      }
    }
    if(isset($_GET['submit'])){
      $result1 = $_GET['num'];
      echo 'f('.$result1;
      echo ')='.Fibonacci($result1);
    }
  ?>
  </div>
</body>

<!-- connection refused -->
<?php CloseCon($conn); ?>

</html>
