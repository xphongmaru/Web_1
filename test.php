<?php
$severname="localhost";
$username="root";
$password="";
$dbname="Phong";

$conn=new mysqli($severname, $username, $password,$dbname);

$query="select * from products";

$result=$conn->query($query);

$products=array();

while($row=$result->fetch_assoc())
    $products[]=$row;


print_r($products)
?>