<?php
$connection = new mysqli( "localhost" , "root" , "","phoneBook" ) ;
if($connection->connect_error){
    die( ' Could not connect : '.$connection->connect_error);
}

