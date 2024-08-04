<?php

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>HI</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
<div class='first'>
<pre>
<form action='gana.php' method='post'>
    <input type='text' name='fv' placeholder='Enter first value'>
    <br>
    <input type='text' name='sv' placeholder='Enter second value'>
    <br>
    <select name='operation'>
    <option name='add'>+</option>
    <option name='sub'>-</option>
    <option name='mul'>x</option>
    <option name='div'>/</option>
    </select>
    <br>
    <input type='submit' style='width: 16.4rem;'>
    </form>
</pre>
</div>
</body>
</html>";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 $a=$_POST["fv"];
 $b=$_POST["sv"];
 $dd=$_POST["operation"];

 switch($dd)
 {
    case '+':

        $c=$a + $b;
        break;

    case '-':

        $c=$a - $b;
        break;

    case 'x':
          
        $c=$a * $b;
        break;
    case '/':
        
        $c=$a / $b;
        break;
    default :
           echo "please choose an operation";


 }


 echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>HI</title>
    <link rel=stylesheet href=styles1.css>
</head>
<body>
<div class=hello>
<pre>
<label for='result'>Result</label>
<br>
<input type='button' value='$a' style='width:7.5rem;'> $dd <input type='button' value='$b' style='width:7.5rem;'>

<input type='text' value='$c'>
</pre>
</div>
</body>
</html>";
}
?>