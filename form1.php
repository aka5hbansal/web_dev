<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>software development</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="centre">
        <h1>Employee Data Entry automation software</h1>
        <div class="form">
            <input type="text" class="textfield" placeholder="search id">
            <input type="text" class="textfield" placeholder="Employee name">
            <select class="textfield">
                <option>select gender</option>
                <option>male</option>
                <option>female</option> 
            </select>    
            <input type="text" class="textfield" placeholder="Email address">
            <select class="textfield">
                <option>select department</option>
                <option>It</option>
                <option>Accounts</option>
                <option>Sales</option>
                <option>HR</option>
                <option>Technical</option> 
            </select>
    
            <textarea placeholder="address"></textarea>
            <input type="button" value="search" name="" class="btn">
            <input type="button" value="save" name="" class="btn" style="background-color:green;">
            <input type="button" value="modify" name="" class="btn" style="background-color:orange;">
            <input type="button" value="Delete" name="" class="btn" style="background-color:red;">
            <input type="button" value="clear" name="" class="btn" style="background-color:blue;">
    </div>
</body>
</html>

<?php
include("connection.php");
?>