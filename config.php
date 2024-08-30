<?php   

$con=new mysqli("localhost","root","","flyflex");

if($con->connect_error)
{
    die("Connection Unsucessful".$con->connect_error); //terminates the current script
}

/*else
{
    echo"Connection Sucessful";
}*/

?>