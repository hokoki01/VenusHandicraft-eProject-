<?php
session_start();
require 'connect_db.php';

if(isset($_POST['delete_product']))
{
    $product_id = mysqli_real_escape_string($connect, $_POST['delete_product']);

    $query = "DELETE FROM product WHERE Id='$product_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: product.php");
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: product.php");
        // exit(0);
    }
}

if(isset($_POST['update_product']))
{
    $product_id = mysqli_real_escape_string($connect, $_POST['product_id']);

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
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: admin.php");
        // exit(0);
    }

}


if(isset($_POST['save_product']))
{
    $Category_id = mysqli_real_escape_string($connect, $_POST['Category_id']);
    $Title = mysqli_real_escape_string($connect, $_POST['Title']);
    $Image = mysqli_real_escape_string($connect, $_POST['Image']);
    $Description = mysqli_real_escape_string($connect, $_POST['Description']);

    $query = "INSERT INTO product (Category_id,Title,Image,Description) VALUES ('$Category_id','$Title','$Image','$Description')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: admin.php");
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: admin.php");
        // exit(0);
    }
}


if(isset($_POST['save_artist']))
{
   
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $Image = mysqli_real_escape_string($connect, $_POST['Image']);
    $Biography = mysqli_real_escape_string($connect, $_POST['Biography']);
    $Career = mysqli_real_escape_string($connect, $_POST['Career']);
    $Personality = mysqli_real_escape_string($connect, $_POST['Personality']);
    $Reviews = mysqli_real_escape_string($connect, $_POST['Reviews']);
    $Honor = mysqli_real_escape_string($connect, $_POST['Honor']);

    $query = "INSERT INTO artist (name,image,Biography,Career,Personality,Reviews,Honor) VALUES ('$name','$Image','$Biography','$Career','$Personality','$Reviews','$Honor')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "artist Created Successfully";
        header("Location: artist.php");
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "artist Not Created";
        header("Location: artist.php");
        // exit(0);
    }
}

if(isset($_POST['delete_artist']))
{
    $artist_id = mysqli_real_escape_string($connect, $_POST['delete_artist']);

    $query = "DELETE FROM artist WHERE id='$artist_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "artist Deleted Successfully";
        header("Location: artist.php");
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "artist Not Deleted";
        header("Location: artist.php");
        // exit(0);
    }
}

if(isset($_POST['update_artist']))
{
    $artist_id = mysqli_real_escape_string($connect, $_POST['artist_id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $image = mysqli_real_escape_string($connect, $_POST['image']);
    $Biography = mysqli_real_escape_string($connect, $_POST['Biography']);
    $Career = mysqli_real_escape_string($connect, $_POST['Career']);
    $Personality = mysqli_real_escape_string($connect, $_POST['Personality']);
    $Reviews = mysqli_real_escape_string($connect, $_POST['Reviews']);
    $Honor = mysqli_real_escape_string($connect, $_POST['Honor']);

    $query = "UPDATE artist SET name ='$name', image='$image', Biography='$Biography', Career='$Career', Personality='$Personality', Reviews='$Reviews', Honor='$Honor' WHERE id='$artist_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: artist.php");
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: artist.php");
        // exit(0);
    }

}



if(isset($_POST['save_category']))
{
    $category_name = mysqli_real_escape_string($connect, $_POST['category_name']);
    $query = "INSERT INTO category (category_name) VALUES ('$category_name')";
    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "artist Created Successfully";
        header("Location: category.php");
        // exit(0);
    }
    else
    {
        $_SESSION['message'] = "artist Not Created";
        header("Location: category.php");
        // exit(0);
    }
}

if(isset($_POST['delete_category']))
{
    $category_id = mysqli_real_escape_string($connect, $_POST['delete_category']);

    $query = "DELETE FROM category WHERE id='$category_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: category.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: category.php");
        exit(0);
    }
}

?>