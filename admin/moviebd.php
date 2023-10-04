<?php
session_start();
$connection= mysqli_connect("localhost","root","","vijaya_theater");

if(isset($_POST['movieadd']))
{

    $name= $_POST['name'];
    $cate= $_POST['categorie'];
    $gender= $_POST['gender'];
    $about= $_POST['about'];
    $dir= $_POST['dir'];
    $lang= $_POST['lang'];
    $run= $_POST['run'];
    $rele= $_POST['rele'];
    $img= $_POST['img'];
    $tra= $_POST['tra'];

    $query = "INSERT INTO movie (movie_name,categorie,gender,about,director,language,release_date,runtime,image,video_url) 
    VALUES ('$name','$cate','$gender','$about','$dir','$lang','$run','$rele','$img','$tra') ";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run)
        {
            $_SESSION['success']="Movie Added";
            header('Location: movie-admin.php');
        }
        else
        {
            $_SESSION['success']="Movie Not Added";
            header('Location: movie-admin.php');
        }

}

?>
