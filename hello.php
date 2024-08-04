<?php
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
             
            echo "<style>

                  .container
                  {
                  margin:auto;
                  margin-top:14rem;
                  background-color:white;
                  padding:0px;
                  display:flex;
                  width:fit-content;
                  }
           
                   table,td,th
                         {
                           border: solid 2px black;
                          color: black;
                           border-collapse: collapse;
                           padding: 5px;
                         }
                    h1
                    {
                      color:blue;
                    }
                      body
                      {
                      background-color:gray;
        
                      }

                  </style>";


            echo "<div class='container'><table><tr><th>roll no</th><th>name</th><th>phone number</th><th>res</th></tr>";
            // output data of each row
            while($row = $b->fetch_assoc())
            {
              
              echo "<tr><td>".$row["rollno"]."</td><td>".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["res"]."</td></tr><br>";

            }
            echo "</table> </div>";

        }
      
      
    }

    



}





?>