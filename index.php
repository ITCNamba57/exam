<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Page</title>
  <meta name="description" content="The HTML5 Template Page">
  <meta name="author" content="abogdan">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <script src="js/scripts.js"></script>
  <h1>Hello World!</h1>
  <?php

  function connect_db(){
    global $connection;
    $host="localhost";
    $user="test";
    $pass="t3st3r123";
    $db="test";
    $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
    mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
  }

  echo "Your IP is: ";

  echo $_SERVER["REMOTE_ADDR"];
  ?>

  <p>
    <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
  </p>
</body>
</html>