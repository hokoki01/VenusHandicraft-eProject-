<?php
session_start();
require 'connect_db.php';

if(isset($_POST['delete_student']))
{
    $product_id = mysqli_real_escape_string($connect, $_POST['delete_student']);

    $query = "DELETE FROM product WHERE id='$product_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $product_id = mysqli_real_escape_string($connect, $_POST['student_id']);

    $Category_id = mysqli_real_escape_string($connect, $_POST['Category_id']);
    $Title = mysqli_real_escape_string($connect, $_POST['Title']);
    $Image = mysqli_real_escape_string($connect, $_POST['Image']);
    $Description = mysqli_real_escape_string($connect, $_POST['Description']);

    $query = "UPDATE product SET Category_id ='$Category_id', Title='$Title', Image='$Image', Description='$Description' WHERE Id='$product_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $Category_id = mysqli_real_escape_string($connect, $_POST['Category_id']);
    $Title = mysqli_real_escape_string($connect, $_POST['Title']);
    $Image = mysqli_real_escape_string($connect, $_POST['Image']);
    $Description = mysqli_real_escape_string($connect, $_POST['Description']);

    $query = "INSERT INTO students (Category_id,Title,Image,Description) VALUES ('$Category_id','$Title','$Image','$Description')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: add_new_product.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: add_new_product.php");
        exit(0);
    }
}

?>