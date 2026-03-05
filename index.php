<!DOCTYPE html>
<html>
<head>
    <title>Volonte's PHP</title>
</head>
<body>
<h1>Volonte PHP</h1>

<pre>
    V   V
    V   V
    V   V
     V V
      V
</pre>

<p>SHA256 of my name:</p>
<?php
print hash('sha256', 'Volonte');
?> <br>
<a href="check.php">Click here to check the error setting</a>
<br>
<br/>
<a href="fail.php">Click here to cause a traceback</a>
</body>
</html>
