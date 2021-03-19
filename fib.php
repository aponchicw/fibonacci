<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>test</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="fib.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
  <header>
    <div class="header">
      <a href="#popup" class="header_phone popup-link">Kchau</a>
    </div>
  </header>
  <div id="popup" class="popup">
    <a href="#header" class="popup_area"></a>
    <div class="popup_body">
      <div class="popup_content">
        <a href="#header" class="popup_close">X</a>
        <div class="popup_title">Modal Window #1</div>
        <div class="popup_calc">
          <input type="text" name="num" placeholder="numberCalc">
          <button type="submit" value="OK"></button>
        </div>
      </div>
    </div>
  </div>
  <div id="main" class="main">
    <p class="result">Result: </p>
    <?php
    if(isset($_GET['submit'])){

    }
    // function getFib($n)
    // {
    //   return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    // }
    ?>
  </div>
</body>

</html>
