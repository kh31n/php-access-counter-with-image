<html>
<head>
  <title>アクセスカウンタ</title>
</head>
<body>
  <?php
    $count = 0;
    if(file_exists("counter.dat")){
      $fp = fopen("counter.dat","r");
      $count = fgets($fp);
      fclose($fp);
    }
    $count++;
    $length = strlen($count);
    print "<center>あなたは";
    for($i = 0; $i < 5 - $length; $i++) {
      print "<img src=\"./0.png\">";
    }
    $t = $count;
    $filename = 0;
    for($i = 0; $i < $length; $i++) {
      for($j = $i; $j < $length; $j++) {
        $filename = $t % 10;
        $t /= 10;
      }
      print "<img src=\"" . $filename . ".png\">";
      $t = $count;
    }
    print "人目のお客さんです。</center>";
    $fp = fopen("counter.dat", "w");
    fwrite($fp, $count);
    fclose($fp);
   ?>
</body>
</html>
