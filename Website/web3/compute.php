<?php
session_start();   
include "connection.php";

$name = "";
$price ="";
$quantity = "";


if(isset($_POST['btn1']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 1";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['btn2']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 2";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['btn3']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 3";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['btn4']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 4";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn5']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 5";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn6']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 6";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn7']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 7";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn8']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 8";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}



?>
