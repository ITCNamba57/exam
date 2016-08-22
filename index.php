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

  connect_db();

  echo "<p>Your IP is: ";

  $ip = $_SERVER["REMOTE_ADDR"];

  echo $ip."<p>";


  function addIP ($add, $connection) {
    $sql = "INSERT INTO abogdan_i244 (ip) VALUES ('$add')";
    mysqli_query($connection, $sql);
    echo "<p>Your IP is saved!</p>";

  }

  function IPcount($connection) {
    $sql = "SELECT COUNT(DISTINCT 'ip') FROM `abogdan_i244`";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    foreach($row as $x=>$y) {
        echo "<p id=answer>Total ".$y. " different IPs</p>";
      }
  }

  addIP($ip, $connection);

  IPcount($connection);


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