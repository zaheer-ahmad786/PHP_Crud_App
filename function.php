<?php
//Database Connection
$connection = mysqli_connect('localhost','root','','crud_php');

if(isset($_GET['logout'])){
    session_start();
    unset($_SESSION['user']);
    header('location:login.php');
}

if(isset($_POST['loginform'])){
    $EMAIL = $_POST['email'];
    $PASSWORD = $_POST['password'];
    $query='SELECT * FROM emp WHERE email="'.$EMAIL.'" AND "'.md5($PASSWORD).'"';
   
    $user=mysqli_query($connection,$query);
    if(mysqli_num_rows($user)>0){
     session_start();
     while($row = mysqli_fetch_assoc($user)){
        $_SESSION['user'] =$row;
     }
      header('location:record.php');
    }else{
        header('location:login.php?msg=0');
    
}
}


if(isset($_POST['registerform'])){
    $query = "INSERT INTO emp (name,fname,email,password,country) VALUES ('".$_POST['name']."','".$_POST['fname']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['country']."')";
    if(mysqli_query($connection,$query)){
        header('location:record.php');
    }
    else{
        header('location:register.php?msg=0');
    }
}
if(isset($_GET['dlt_id'])){
    if($_GET['dlt_id']>0 && !empty($_GET['dlt_id'])){
        $query='DELETE FROM emp WHERE id="'.$_GET['dlt_id'].'"';
        if(mysqli_query($connection,$query)){
            header('location:record.php');
        }
        else{
            header('location:record.php?msg=0');
        }
    }
}
if(isset($_POST['updateform'])){
    $query ='UPDATE emp SET name="'.$_POST['name'].'",fname="'.$_POST['fname'].'",email="'.$_POST['email'].'",country="'.$_POST['country'].'" WHERE id="'.$_POST['id'].'"';
    if(mysqli_query($connection,$query)){
        header('location:record.php');
    }
    else{
        header('location:register.php?msg=0');
    }
}
?>