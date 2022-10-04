<?php
$server = "local host";
$username = "root";
$password = " ";
$db = "student";
$conn = mysquli_connect($server,$username,$password,$db);
if(!$conn)
{
echo "unsuccesful connection";
}
else
{
echo "connected succesfully";
}
?>