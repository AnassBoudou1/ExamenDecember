<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM cards WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "card Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "card Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_card']))
{
    $card_id = mysqli_real_escape_string($con, $_POST['id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $uitleg = mysqli_real_escape_string($con, $_POST['uitleg']);
    $foto = mysqli_real_escape_string($con, $_POST['foto']);
    $button = mysqli_real_escape_string($con, $_POST['button']);

    $query = "UPDATE cards SET name='$name', uitleg='$uitleg', foto='$foto', button='$button'WHERE id='$card_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "card Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "card Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
   
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $uitleg = mysqli_real_escape_string($con, $_POST['uitleg']);
    $foto = mysqli_real_escape_string($con, $_POST['foto']);
    $button = mysqli_real_escape_string($con, $_POST['button']);

    $query = "INSERT INTO cards VALUES ('','$name','$uitleg','$foto','$button')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "cards Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "card Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>