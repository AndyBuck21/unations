<?php 
$connection = new mysqli("localhost","unation1_vnation1","3g?ITp9@c+QW","unation1_codingbirds");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}