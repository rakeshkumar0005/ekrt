<?php
$base_url = "http://localhost/ekart/";
$db= new mysqli("localhost","root","","ekart");

if(!$db){
    die("not db found");
}
session_start();

