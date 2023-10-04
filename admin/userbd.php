<?php
session_start();
$connection= mysqli_connect("localhost","root","","vijaya_theater");
if(isset($_POST['adminadd']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$password') ";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run)
        {
            $_SESSION['success']="Admin Profile Added";
            header('Location: user.php');
        }
        else
        {
            $_SESSION['success']="Admin Profile Not Added";
            header('Location: user.php');
        }
    }
    else
    {
            $_SESSION['status']="Password and Confirm Password Not Match";
            header('Location: user.php');
    }
}

// data update

if(isset($_POST['updatebtn']))
{
    $id= $_POST['edit_id'];
    $usermame=$_POST['edit_username'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];

    $query= "UPDATE admin SET username='$usermame',email='$email',password='$password' WHERE id='$id' ";
    $query_run= mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your data is updated";
            header('Location: user.php');
    }
    else
    {
        $_SESSION['status']="Your data is not updated";
            header('Location: user.php');
    }
}

// data delete

if(isset($_POST['addelete-btn']))
{
    $id= $_POST['delete_id'];

    $query= "DELETE FROM admin WHERE id='$id'";
    $query_run= mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="Your data is deleted";
            header('Location: user.php');
    }
    else
    {
        $_SESSION['status']="Your data is not deleted";
        header('Location: user.php');
    }



}



// login back end

if(isset($_POST['loginbtn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FORM admin WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username']= $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status']= 'Email id and Password is invalid';
        header('Location: login.php');
    }
    

}




?>



