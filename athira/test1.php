<html>
 <head>
 </head>
  <body>
    <form  action="test1.php" method=post>
     <input type="text" name="a">
     <input type="submit" name="s">
  </body>
</html>
  <?php
  if(isset($_POST['s']))
  {
   $n=$_POST['a'];
   echo "the value entered:",$n;
  }
  ?>

