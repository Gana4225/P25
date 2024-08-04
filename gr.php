<?php
/*
$server="localhost";
$user="gana";
$pass="gana";
$db="std";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $rno=$_POST["rno"];
    $dob=$_POST["dob"];

    $con=new mysqli($server,$user,$pass,$db);

    if($con->connect_error)
    {
        echo "Connecton failed to database";
    }
    else
    {
        

        $a="select rollno,name,phno,res from res where rollno='$rno' and gender='$dob'";
        $b=$con->query($a);

        if ($b->num_rows > 0) 
        {
            echo "<table style='border: solid 2px black;border-collapse: collapse;padding: 5px;'><tr><th style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>roll no</th><th style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>name</th><th style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>phone number</th><th style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>res</th></tr>";
            // output data of each row
            while($row = $b->fetch_assoc())
            {
              echo "<tr style='border: solid 2px black;border-collapse: collapse;padding: 5px;'><td style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>".$row["rollno"]."</td><td style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>".$row["name"]."</td><td style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>".$row["phno"]."</td><td style='border: solid 2px black;border-collapse: collapse;padding: 5px;'>".$row["res"]."</td></tr><br>";
            }
            echo "</table>";

        }
    }

    



}



*/

?>
