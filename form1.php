<?php
include("connection.php");
?>
<?php
if(isset($_POST['search']))
{
    $search      =$_POST['search'];
    
    
    $query  = "select * from form where id='$search'";

    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);
    //$name=$result['emp_name'];
    //echo $name;
}
?>
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
        <form action="#" method="POST">
        <h1>Employee Data Entry automation software</h1>
        <div class="form">
            <input type="text" name="search" class="textfield" placeholder="search id" value="<?php if(isset($_POST['searchdata'])){echo $result['id'];}?>">
            <input type="text" name="name" class="textfield" placeholder="Employee name" value="<?php if(isset($_POST['searchdata'])){echo $result['emp_name'];}?>">
            <select class="textfield" name="gender">
                <option value="not selected">select gender</option>
                <option value="male" <?php if($result['emp_gender']=='male'){echo "selected";}?>>male</option>
                <option value="female" <?php if($result['emp_gender']=='female'){echo "selected";}?>>female</option> 
            </select>    
            <input type="text" name="email" class="textfield" placeholder="Email address" value="<?php if(isset($_POST['searchdata'])){echo $result['emp_email'];}?>">
            <select class="textfield" name="department">
                <option value="not selected">select department</option>
                <option value="IT" <?php if($result['emp_dept']=='IT'){echo "selected";}?>>It</option>
                <option value="Accounts" <?php if($result['emp_dept']=='Accounts'){echo "selected";}?>>Accounts</option>
                <option value="Sales" <?php if($result['emp_dept']=='Sales'){echo "selected";}?>>Sales</option>
                <option value="HR" <?php if($result['emp_dept']=='HR'){echo "selected";}?>>HR</option>
                <option value="Technical">Technical</option> 
            </select>
    
            <textarea placeholder="address" name="address"><?php if(isset($_POST['searchdata'])){echo $result['emp_address'];}?></textarea>
            <input type="submit" value="search" name="searchdata" class="btn">
            <input type="submit" value="save" name="save" class="btn" style="background-color:green;">
            <input type="submit" value="modify" name="" class="btn" style="background-color:orange;">
            <input type="submit" value="Delete" name="delete" class="btn" style="background-color:red;" onclick="return checkdelete()">
            <input type="submit" value="clear" name="" class="btn" style="background-color:blue;">
    </div>
</form>
</div>
</body>
</html>

<script>
    function checkdelete(){
        return confirm('are you sure you want to delete this record');
    }
</script>

<?php
if(isset($_POST['save']))
{
    $name      =$_POST['name'];
    $gender    =$_POST['gender'];
    $email     =$_POST['email'];
    $department=$_POST['department'];
    $address   =$_POST['address'];
    
    $query  = "INSERT INTO form(emp_name,emp_gender,emp_email,emp_dept,emp_address) VALUES ('$name','$gender','$email','$department','$address')";

    $data=mysqli_query($conn,$query);
    if($data){
        echo "<script> alert('Data saved into Database') </script>";
    }
    else{
        echo "<script> alert('Failed to save data') </script>";
    }
}
?>
<?php
if(isset($_POST['delete']))
{
    $id=$_POST['search'];
    $query="DELETE FROM FORM WHERE id='$id'";
    $data=mysqli_query($conn,$query);
    if($data){
        echo "<script> alert('Record deleted') </script>";
    }
    else{
        echo "<script> alert('failed to delete') </script>";
    }
}
?>
