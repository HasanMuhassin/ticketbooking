<?php
session_start();
$connection= mysqli_connect("localhost","root","","vijaya_theater");
if(isset($_POST['showadd']))
{
    $showtype=$_POST['show-type'];
    $name=$_POST['addshow-movielist'];
    $date=$_POST['showdate'];
    $time=$_POST['showtime'];


        $query = "INSERT INTO show_table(categories,movie_name,start_date,show_time	)
        VALUES ('$showtype','$namel','$date','$time') ";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run)
        {
            $_SESSION['success']="Show Added";
            header('Location: show-admin.php');
        }
        else
        {
            $_SESSION['success']="Show Not Added";
            header('Location: show-admin.php');
        }

}

?>



